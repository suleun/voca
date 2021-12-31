<template>
    <div class="flex flex-col space-y-2">

        <div >
            <div class="bg-white pb-4 px-4 rounded-md w-full">
                <div class="flex justify-between w-full pt-6 ">
                    <p class="ml-3">
                        오늘 저장한 단어</p>
                   
                </div>
                <div class="w-full flex justify-end px-2 mt-2">
                    <div class="w-full sm:w-64 inline-block relative ">
                        <input
                            type=""
                            name=""
                            class="leading-snug border border-gray-300 block w-full appearance-none bg-gray-100 text-sm text-gray-600 py-1 px-4 pl-8 rounded-lg"
                            placeholder="Search"/>

                        <div
                            class="pointer-events-none absolute pl-3 inset-y-0 left-0 flex items-center px-2 text-gray-300">

                            <svg
                                class="fill-current h-3 w-3"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 511.999 511.999">
                                <path
                                    d="M508.874 478.708L360.142 329.976c28.21-34.827 45.191-79.103 45.191-127.309C405.333 90.917 314.416 0 202.666 0S0 90.917 0 202.667s90.917 202.667 202.667 202.667c48.206 0 92.482-16.982 127.309-45.191l148.732 148.732c4.167 4.165 10.919 4.165 15.086 0l15.081-15.082c4.165-4.166 4.165-10.92-.001-15.085zM202.667 362.667c-88.229 0-160-71.771-160-160s71.771-160 160-160 160 71.771 160 160-71.771 160-160 160z"/>
                            </svg>
                        </div>
                    </div>
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
                            <tr v-for="voca in vocas" :key="voca.id" class="hover:bg-gray-100 border-b border-gray-200 py-10">
                                <td class="px-4 py-4">{{ voca.japanese }}</td>
                                <td class="px-4 py-4">{{ voca.hiragana }}</td>
                                <td class="px-4 py-4">{{ voca.mean }}</td>
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
        props: ['vocas'],
        components: {}
    }
</script>