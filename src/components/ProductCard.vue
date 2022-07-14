<template>
  <div class="product-card">
    <input type="checkbox" class="product-card--delete-checkbox delete-checkbox">
    <div class="product-card--sku">{{name}}</div>
    <div class="product-card--name">Chair</div>
    <div class="product-card--price">4.00 $</div>
    <div class="product-card--custom-field">Dimension 35x35x100</div>
  </div>
</template>

<script lang="ts">
import './ProductCard.scss';
import { Vue, Options } from 'vue-class-component'

@Options({
  props: {
    name: String
  }
})
export default class ProductCard extends Vue {
  name!: string
}
</script>
