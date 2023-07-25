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
        <h1>記録</h1>
        <form @submit.prevent="storeChildcareLog">
            <button type="button" class="w-1/5 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mx-1 rounded"
                @click="setCategoryId(1)"><img src="/images/哺乳瓶のアイコン.svg" class="w-5 h-5 inline" />授乳</button>
            <button type="button" class="w-1/5 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mx-1 rounded"
                @click="setCategoryId(2)"><img src="/images/哺乳瓶のアイコン.svg" class="w-5 h-5 inline" />ミルク</button>
            <button type="button" class="w-1/5 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mx-1 rounded"
                @click="setCategoryId(3)"> <img src="/images/うんち.svg" class="w-5 h-5 inline" />うんち</button>
            <button type="button" class="w-1/5 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mx-1 rounded"
                @click="setCategoryId(4)"><img src="/images/おしっこ.svg" class="w-5 h-5 inline" />おしっこ</button>
            <button type="button" class="w-1/5 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 m-1 rounded"
                @click="setCategoryId(5)"><img src="/images/寝ているあかちゃん.svg" class="w-5 h-5 inline" />寝る</button>
            <button type="button" class="w-1/5 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 m-1 rounded"
                @click="setCategoryId(6)"><img src="/images/驚いたあかちゃん.svg" class="w-5 h-5 inline" />起きる</button>
            <div class="m-2">
                <label for="memo">メモ</label>
                <input id="memo" type="text" name="memo" v-model="form.memo"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
            </div>
            <button type="submit"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mx-1 rounded m-auto">記録する</button>
        </form>
    </div>
</template>
