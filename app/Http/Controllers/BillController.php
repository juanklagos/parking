<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BillController extends Controller
{

    CONST EMAIL = 'francisco@yopmail.com';
    CONST TOKEN = 'a279a7761a02aafdbd73';

    public function billShow(Request $request)
    {
        $bill_id = $request->bill_id;
        $invoice = $this->invoice($bill_id);
        $company = $this->company();

        return response()->json([
            'invoice' => $invoice,
            'company' => $company
        ]);
    }

    public function invoice($id)
    {
        $response = $this->httpRequestGet('invoices/' . $id);
        return $response;
    }

    public function company()
    {
        $response = $this->httpRequestGet('company');
        return $response;
    }

    public function bill(Request $request)
    {

        $item = $this->item();
        $customer = $this->customer();

        $billDates = $this->billDates($request->seconds, $request->license_plate, $customer, $item);
        $billing = $this->billing($billDates);

        return response()->json([
            'item' => $item,
            'customer' => $customer,
            'token' => '',
            'license_plate' => $request->license_plate,
            'seconds' => $request->seconds,
            'billing' => $billing,
            'params' => $billDates
        ]);
    }

    public function billDates($seconds, $license_plate, $customer, $item)
    {
        $date = Carbon::now();
        $content =
            [
                "date" => $date->format('Y-m-d'),
                "dueDate" => $date->addDay(1)->format('Y-m-d'),
                "client" => $customer->id,
                "anotation" => " PLACA VEHICULO: " . $license_plate,
                "items" => [
                    [
                        "id" => $item->id,
                        "price" => 30,
                        "quantity" => $seconds
                    ],
                ],
                "status" => 'open',
                "payments" => [
                    [
                        "date" => $date->format('Y-m-d'),
                        "account" => [
                            "id" => 1
                        ],
                        "amount" => $seconds * 30,
                        "paymentMethod" => "cash",
                    ]
                ]
            ];

        return $content;
    }

    public function billing($params)
    {
        $response = $this->httpRequestPost('invoices', $params);
        return $response;
    }

    public function item()
    {
        $response = $this->httpRequestGet('items/1');
        return $response;
    }

    public function customer()
    {
        $response = $this->httpRequestGet('contacts/1');
        return $response;
    }

    public function httpRequestPost($url, $params)
    {
        $Authorization = 'Basic ' . base64_encode(self::EMAIL . ':' . self::TOKEN);
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $Authorization,
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers,
            'body' => json_encode($params)
            //'form_params' => $params
        ]);
        $request = $client->post('https://api.alegra.com/api/v1/' . $url);
        $response = json_decode($request->getBody()->getContents());

        return $response;
    }

    public function httpRequestGet($url)
    {
        $Authorization = 'Basic ' . base64_encode(self::EMAIL . ':' . self::TOKEN);
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => $Authorization,
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);
        $request = $client->get('https://api.alegra.com/api/v1/' . $url);
        $response = json_decode($request->getBody()->getContents());

        return $response;

    }
}
