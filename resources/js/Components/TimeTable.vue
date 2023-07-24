<template>
    <div>
        <h1>1週間の時間</h1>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th v-for="day in days" :key="day">{{ formatDate(day) }}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="hour in 24" :key="hour">
                    <td>{{ hour }}:00</td>
                    <td v-for="day in days" :key="day">
                        <!-- ここにデータを表示するためのテンプレートを追加する -->
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const days = ref([]);

// 1週間分の日付を取得
onMounted(() => {
    const startDate = new Date(); // 今の日付を取得
    for (let i = 0; i < 7; i++) {
        const currentDate = new Date(startDate);
        currentDate.setDate(startDate.getDate() + i);
        days.value.push(currentDate);
    }
});

// 日付をフォーマットする関数
const formatDate = (date) => {
    const options = { weekday: 'short', month: 'short', day: 'numeric' };
    return date.toLocaleDateString('ja-JP', options);
};
</script>

