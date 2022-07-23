<template>
  <div class="container">
    <header class="header">
      <h1 class="title">Product List</h1>
      <div class="controls">
        <button class="controls--button">Mass Delete</button>
        <router-link to="/add">
          <button class="controls--button">Add</button>
        </router-link>        
      </div>
    </header>
    <main class="main">
      <ProductCard name="jvc200213"></ProductCard>
      <ProductCard name="jvc200213"></ProductCard>
      <ProductCard name="jvc200213"></ProductCard>
      <ProductCard name="jvc200213"></ProductCard>
      <ProductCard name="jvc200213"></ProductCard>
      <ProductCard name="jvc200213"></ProductCard>
    </main>
  </div> 
</template>

<script lang="ts">
import './ProductListPage.scss'
import ProductCard from '../../components/ProductCard/ProductCard.vue'

export default {
  components: {ProductCard}
}
</script>