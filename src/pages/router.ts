import { createRouter, createWebHashHistory /*, createWebHistory*/ } from "vue-router";
import ProductListPage from './ProductList/ProductListPage.vue'
import NewProductPage from './NewProduct/NewProductPage.vue'
import { Component } from "vue";

const routes : Array<{path:string, component: Component}> = [
  {path: '/', component: ProductListPage},
  {path: '/add', component: NewProductPage}
];

const router = createRouter({
  history: createWebHashHistory(),
  routes: routes
})



export default router;