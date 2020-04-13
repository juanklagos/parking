import Login from "./components/views/Auth/Login";
import Home from "./components/views/Home";
import Report from "./components/views/Report";
import Invoice from "./components/views/Invoice";
export const routes = [

    {
        path: '/',
        name: 'login',
        component: Login,
    },
    {
        path: '/home',
        name: 'home',
        component: Home,
        meta: {
            auth: true
        }
    }, {
        path: '/report',
        name: 'report',
        component: Report,
        meta: {
            auth: true
        }
    },
    {
        path: '/invoice/:id',
        name: 'invoice',
        component: Invoice,
        meta: {
            auth: true
        }
    },
    {
        path: '*',
        name: 'catch',
        component: Login
    }
];
