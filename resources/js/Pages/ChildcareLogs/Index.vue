<script setup>
import GChart from '@/Components/GChart.vue';
import Time from '@/Components/TimeTable.vue';
import { Link } from '@inertiajs/vue3';
import flatpickr from '@/Components/Flatpickr.vue';



defineProps({
    childcareLogs: Array
})

</script>

<template>
    <div class="text-center">
        <h1>Childcare Logs</h1>
        <ul>
            <li v-for="log in childcareLogs" :key="log.id">
                {{ log.id }}
                {{ log.user.name }}
                {{ log.category.name }}
                {{ log.datetime }}
                {{ log.memo }}
            </li>
        </ul>

    </div>
    <img src="/images/うんち.svg" class="w-5 h-5" />

    <Link href="/childcarelog/create" class="button">記録画面</Link>

    <Time />

    <flatpickr></flatpickr>
</template>


