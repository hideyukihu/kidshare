<script setup>
    defineProps({
        childcareLogs:Array
    })
</script>

<template>
    <div>
        <h1>Childcare Logs</h1>
        <ul>
            <li v-for="log in childcareLogs" :key="log.id">
                {{ log.id }}
                {{ log.user_id }}
                {{ log.datetime }}
                {{ log.memo }}
            </li>
        </ul>
    </div>
    <!-- <div>childcareLogsindex</div> -->
</template>


