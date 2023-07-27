<template>
    <flat-pickr v-model="date" :config="config" class="form-control" placeholder="Select date" name="date" />
</template>

<script setup>
import { ref } from 'vue';
import flatPickr from 'vue-flatpickr-component';
import 'flatpickr/dist/flatpickr.css';
import { Japanese } from 'flatpickr/dist/l10n/ja'

const date = ref(null);

const config = ref({
    wrap: true, // set wrap to true only when using 'input-group'
    altFormat: 'Y 年 M j 日',
    altInput: true,
    dateFormat: 'Y-m-d',
    locale: Japanese, // locale for this instance only
});
</script>
