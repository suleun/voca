<template>
    <div class="flex flex-col space-y-2">

        <div >
            <div class="bg-white pb-4 px-4 rounded-md w-full">
                <div class="flex justify-between w-full pt-6 ">
                    <p class="ml-3">
                        오늘 저장한 단어
                    </p>
                </div>

                <div class="overflow-x-auto mt-6">

                    <table class="table-auto border-collapse w-full">
                        <thead>
                            <tr
                                class="rounded-lg text-sm font-medium text-gray-700 text-left"
                                style="font-size: 0.9674rem">
                                <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">한자</th>
                                <th class="px-4 py-2 " style="background-color:#f8f8f8">읽는 방법</th>
                                <th class="px-4 py-2 " style="background-color:#f8f8f8">뜻</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm font-normal text-gray-700">

                            <tr
                                v-for="voca in vocas"
                                :key="voca.id"
                                class="hover:bg-gray-100 border-b border-gray-200 py-10">
                                <td v-if="voca.today == today" class="px-4 py-4">{{ voca.japanese }}</td>
                                <td v-if="voca.today == today" class="px-4 py-4">{{ voca.hiragana }}</td>
                                <td v-if="voca.today == today" class="px-4 py-4">{{ voca.mean }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>
</template>

<script>

    export default {
        props: [
            'vocas', 'count'
        ],
        data() {
            function leftPad(value) {
                if (value >= 10) {
                    return value;
                }
                return `0${value}`;
            }
            function toStringByFormatting(source, delimiter = '-') {
                const year = source.getFullYear();
                const month = leftPad(source.getMonth() + 1);
                const day = leftPad(source.getDate());
                return [year, month, day].join(delimiter);
            }

            let todayDate = toStringByFormatting(new Date());
            console.log(todayDate);
            return {today: todayDate}
        },
        components: {}
    }
</script>