<template>
    <div>
        <h1>Childcare Log Details</h1>
        <p>Title: {{ childcareLog.title }}</p>
        <p>Description: {{ childcareLog.description }}</p>
    </div>
</template>

<script>
export default {
    props: {
        childcareLog: Object,
    },
};
</script>
