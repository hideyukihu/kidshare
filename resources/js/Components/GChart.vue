<script>
import { defineComponent, h } from 'vue';

import { GChart } from 'vue-google-charts';

const columns = [
    { type: 'string', id: 'day of week' },
    { type: 'string', id: 'category' },
    { type: 'datetime', id: 'Start' },
    { type: 'datetime', id: 'End' },
];

const rows = [
    ['月', '授乳', new Date(0, 0, 0, 0, 0, 0), new Date(0, 0, 0, 24, 0, 0),],
    ['月', '授乳', new Date(0, 0, 0, 0, 0, 0), new Date(0, 0, 0, 24, 0, 0)],
    // ['月', 'うんち', new Date(0, 0, 0, 1, 0, 0), new Date(0, 0, 0, 2, 0, 0)],
    // ['月', '睡眠', new Date(0, 0, 0, 1, 0, 0), new Date(0, 0, 0, 3, 0, 0)],
    ['火', '睡眠', new Date(0, 0, 0, 12, 0, 0), new Date(0, 0, 0, 12, 10, 0)],
    ['水', '睡眠', new Date(0, 0, 0, 12, 0, 0), new Date(0, 0, 0, 24, 0, 0)],
    // ['木', 'うんち', new Date(0, 0, 0, 12, 0, 0), new Date(0, 0, 0, 24, 0, 0)],
    // ['金', '母乳', new Date(0, 0, 0, 12, 0, 0), new Date(0, 0, 0, 24, 0, 0)],
    // ['土', '母乳', new Date(0, 0, 0, 12, 0, 0), new Date(0, 0, 0, 24, 0, 0)],
    // ['日', '睡眠', new Date(0, 0, 0, 12, 0, 0), new Date(0, 0, 0, 24, 0, 0)],
];



export const type = 'Timeline';

export const data = [columns, ...rows];

export const options = {
    width: 1000,
    height: 300,
    showRowLabels: true,
    groupByRowLabel: true
};

export default defineComponent({
    name: 'GoogleChart',
    components: {
        GChart,
    },
    setup() {
        return () =>
            h(GChart, {
                data,
                options,
                type,
                settings: {
                    packages: ['timeline'],
                },
            });
    },
});

</script>
