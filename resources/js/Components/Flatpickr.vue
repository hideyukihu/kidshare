<template>
    <flat-pickr v-model="date" />
</template>

<script setup>
import { ref } from 'vue';
import flatPickr from 'vue-flatpickr-component';
import 'flatpickr/dist/flatpickr.css';

const date = ref(null);
</script>
