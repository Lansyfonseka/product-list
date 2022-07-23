<template>
  <div class="container">
    <header class="header">
      <h1 class="title">Product Add</h1>
      <div class="controls">
        <button class="controls--button" @click="saveNewProduct">Save</button>
        <router-link to="/">
          <button class="controls--button">Cancel</button>
        </router-link>        
      </div>
    </header>
    <main class="main">
      <NewProductForm :productsTypes="productsTypes"></NewProductForm>
    </main>
  </div>  
</template>

<script lang="ts">
import './NewProductPage.scss'
import axios from 'axios'
import NewProductForm from '@/components/NewProductForm/NewProductForm.vue'
import ProductType from '../../components/NewProductForm/assets/productType';
const templateOfProductType:Array<ProductType> = [
  {
    name: 'DVD',
    description: 'Please provide size of DVD in MB',
    customFields: [
      {
        fieldTitile: 'Size (MB)',
        fieldId: 'DVD'
      }
    ]
  },
  {
    name: 'Book',
    description: 'Please provide weight of book in KG',
    customFields: [
      {
        fieldTitile: 'Weight (KG)',
        fieldId: 'weight'
      }
    ]
  },
  {
    name: 'Furnuture',
    description: 'Please provide dimension in HxWxL format',
    customFields: [
      {
        fieldTitile: 'Height (CM)',
        fieldId: 'height'
      },{
        fieldTitile: 'Width (CM)',
        fieldId: 'width'
      },
      {
        fieldTitile: 'Length (CM)',
        fieldId: 'length'
      }
    ]
  }
]
export default {
  components: {
    NewProductForm
  },
  data() {
    return {
      productsTypes: templateOfProductType
    }
  }
}
</script>