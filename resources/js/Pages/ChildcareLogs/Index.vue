<script setup>
import GChart from '@/Components/GChart.vue';
import Time from '@/Components/TimeTable.vue';

defineProps({
    childcareLogs: Array,

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

        <GChart />
    </div>


</template>


