<script setup>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';

const form = reactive({
    user_id: null,
    category_id: null,
    datetime: null,
    memo: null
});

const storeChildcareLog = () => {
    router.post('/childcarelog', form);
};

const setCategoryId = (categoryId) => {
    form.category_id = categoryId;
};
</script>

<template>
    <div>
        <h1>Create Childcare Log</h1>
        <form @submit.prevent="storeChildcareLog">
            <button type="button" class="w-1/5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-1 rounded"
                @click="setCategoryId(1)">授乳</button>
            <button type="button" class="w-1/5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-1 rounded"
                @click="setCategoryId(2)">うんち</button>
            <button type="button" class="w-1/5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-1 rounded"
                @click="setCategoryId(3)">おしっこ</button>
            <button type="button" class="w-1/5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-1 rounded"
                @click="setCategoryId(4)">睡眠</button>
            <div class="m-2">
                <label for="memo">メモ</label>
                <input id="memo" type="text" name="memo" v-model="form.memo"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-1 rounded">送信</button>
        </form>
    </div>
</template>
