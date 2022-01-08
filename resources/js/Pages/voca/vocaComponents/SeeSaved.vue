<template>
    <div class="flex flex-col space-y-2">

        <div >
            <div class="bg-white pb-4 px-4 rounded-md w-full">
                <div class="flex justify-between w-full pt-6 ">
                    <p class="ml-3">
                        저장한 단어 :
                        {{ count }}</p>

                </div>

                <div class="overflow-x-auto mt-6">

                    <table class="table-auto border-collapse w-full">
                        <thead>
                            <tr
                                class="rounded-lg text-sm font-medium text-gray-700 text-left"
                                style="font-size: 0.9674rem">
                                <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">한자
                                    <Toggle v-model="value"/></th>

                                <th class="px-4 py-2 " style="background-color:#f8f8f8">읽는 방법
                                    <Toggle v-model="value1"/>
                                </th>

                                <th class="px-4 py-2 " style="background-color:#f8f8f8">뜻
                                    <Toggle v-model="value2"/>
                                </th>

                                <th class="px-4 py-2 " style="background-color:#f8f8f8">저장한 날짜</th>

                                <th class="px-4 py-2 mx-auto" style="background-color:#f8f8f8"></th>

                            </tr>
                        </thead>
                        <tbody class="text-sm font-normal text-gray-700">

                            <tr
                                v-for="voca in vocas"
                                :key="voca.id"
                                class="hover:bg-gray-100 border-b border-gray-200 py-10">
                                <td v-if="value" class="px-4 py-4">{{ voca.japanese }}</td>
                                <td v-if="!value" class="px-4 py-4"></td>

                                <td v-if="value1" class="px-4 py-4">{{ voca.hiragana }}</td>
                                <td v-if="!value1" class="px-4 py-4"></td>

                                <td v-if="value2" class="px-4 py-4">{{ voca.mean }}</td>
                                <td v-if="!value2" class="px-4 py-4"></td>

                                <td class="px-4 py-4">{{ voca.today }}</td>

                                <td>
                                    <button @click="deleteVoca(voca.id)">
                                        <img
                                            class="mx-auto cursor-pointer"
                                            src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/30/000000/external-delete-multimedia-kiranshastry-gradient-kiranshastry.png"/>

                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>
</template>

<script>
    import Toggle from '@vueform/toggle'
    export default {
        props: [
            'vocas', 'count', 
        ],
        components: {
            Toggle
        },
        data() {
            return {value: true, value1: true, value2: true}
        },
        methods: {
            deleteVoca(id) {
                if (confirm('Are you sure to delete?')) {
                    axios
                        .delete('/vocas.destroy/' + id)
                        .then(response => {
                            console.log("삭제 되었습니다.");
                        })
                        .catch(error => {
                            alert('delete failed:' + error);
                            console.log(error);
                        });
                }

            }
        }
    }
</script>