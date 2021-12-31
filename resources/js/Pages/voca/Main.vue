<template>
    <Head title="Main"/>

    <BreezeAuthenticatedLayout>

        <div class="py-6 bg-red-200">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Vocabulary note

                        <InputWord></InputWord>

                    </div>
                </div>

                <div class="my-4 bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <savedWord :vocas="vocas" :count="count"></savedWord>
                    </div>

                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
    import {Head} from '@inertiajs/inertia-vue3';
    import InputWord from '@/Pages/voca/vocaComponents/InputWord.vue';
    import savedWord from '@/Pages/voca/vocaComponents/savedWord.vue';

    export default {
        props: ['vocas', 'count'],
        components: {
            BreezeAuthenticatedLayout,
            Head,
            InputWord,
            savedWord
        }
    }
</script>