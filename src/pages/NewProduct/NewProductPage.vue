<template>
  <div class="container">
    <header class="header">
      <h1 class="title">Product Add</h1>
      <div class="controls">
        <button class="controls--button">Save</button>
        <router-link to="/">
          <button class="controls--button">Cancel</button>
        </router-link>        
      </div>
    </header>
    <main class="main new-product">
      <form action="submit" id="product_form" class="form">
        <div class="form--row">
          <label for="sku">SKU</label>
          <input type="text" id="sku">
        </div>
        <div class="form--row">
          <label for="name">Name</label>
          <input type="text" id="name">
        </div>
        <div class="form--row">
          <label for="price">Price ($)</label>
          <input type="number" id="price">
        </div>
        <div class="form--row">
          <label for="productType">Type Switcher</label>
          <select name="productType" id="productType" v-model="productType">
            <option value="" disabled selected>Type Switcher</option>
            <option value="dvd" id="DVD" >DVD</option>
            <option value="furniture" id="Furniture">Furniture</option>
            <option value="book" id="Book">Book</option>
          </select>
        </div>
        <div class="form--row">{{productType}}</div>
      </form>
    </main>
  </div>  
</template>

<script lang="ts">
import './NewProductPage.scss'
import { Vue } from 'vue-class-component'

export default class NewProductPage extends Vue {
  dvd() {
    console.log('adjfhl')
  }
  productType: string = ''
}
</script>