<template>
  <form action="submit" id="product_form" class="form new-product">
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
      <select name="productType" id="productType" v-model="selected">
        <option value="" disabled selected>Type Switcher</option>
        <option 
          v-for="productType in allProductTypes"
          :key="productType.name" 
          :id="productType.name"
          :value="productType"
        >
          {{productType.name}}
        </option>
      </select>
    </div>
    <div 
      class="form--row"
      v-for="customField in selected.customFields" :key="customField.title"
    >
      <label :for="customField.fieldId">{{customField.fieldTitile}}</label>
      <input type="number" :id="customField.fieldId">
    </div>
    <div class="form--row description">
      {{selected.description}}
    </div>
  </form>
</template>

<script lang="ts">
import './NewProductForm.scss'
import type ProductTypeInteface from './assets/productType'
import { defineComponent } from 'vue'

export default defineComponent({
  props: {
    productsTypes: Object as () => Array<ProductTypeInteface>
  },
  data() {
    return {
      selected: ''
    }
  },
  setup(props) {
    return {allProductTypes: JSON.parse( JSON.stringify(props.productsTypes))}
  },
  mounted() {
    console.log(this.allProductTypes)
  }
})
</script>

