<template>
    <Head title="Main"/>

    <BreezeAuthenticatedLayout>

        <div class="py-6 bg-sky-200">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div
                    class="flex items-center p-6 space-x-6 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500">
                    <div class="flex bg-gray-100 w-5/6 mx-auto p-4 rounded-lg">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-6 opacity-30"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>

                        <form action="vocas.find" method="get" class="mx-auto w-full">
                            <input name="find" class="bg-gray-100 border-none w-full" type="text"/>

                        </form>

                    </div>
                    <button
                        v-on:click="showSearch"
                        type="submit"
                        class="bg-indigo-500 py-3 px-5 text-white font-semibold rounded-lg hover:shadow-lg transition duration-3000 cursor-pointer">
                        <span>검색</span>
                    </button>
                </div>

                <div class="my-4 bg-white overflow-hidden shadow-sm sm:rounded-lg ">


                    <div class="p-6 bg-white border-b border-gray-200">
                        <SeeSaved :vocas="vocas" :count="count"></SeeSaved>
                    </div>

                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
    import {Head} from '@inertiajs/inertia-vue3'
    import SeeSaved from '@/Pages/voca/vocaComponents/SeeSaved.vue'
    import Swal from 'sweetalert2'
    import Toggle from '@vueform/toggle'

    export default {
        props: [
            'vocas', 'count'
        ],
        components: {
            BreezeAuthenticatedLayout,
            Head,
            SeeSaved,
            Toggle
        },
        data() {
            return {value: true}
        },
        methods: {
            showSearch() {
                if (true) {
                    Swal.fire(
                        {title: '찾은 단어', text: '단어 :  읽는 법 : 뜻', icon: 'success', confirmButtonText: '확인'}
                    )
                } else {
                    Swal.fire(
                        {title: 'Error!', text: '찾으시는 단어가 없습니다.', icon: 'error', confirmButtonText: '확인'}
                    )
                }

            }

        }
    }
</script>

<style src="@vueform/toggle/themes/default.css"></style>