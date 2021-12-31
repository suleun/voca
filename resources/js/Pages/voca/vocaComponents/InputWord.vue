<template>
    <div class="flex flex-col space-y-2">

        <form  action="vocas.store"
                    method="post" class="mx-auto">
            <input type="hidden" name="_token" id="token" :value="csrf">
            <div >
                <input
                    id="default"
                    type="text"
                    name="japanese"
                    placeholder="한자"
                    class="px-4 py-2 mx-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"/>
                <input
                    id="default"
                    type="text"
                    name="hiragana"
                    placeholder="읽는 방법"
                    class="px-4 py-2 mx-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"/>
                <input
                    id="default"
                    type="text"
                    name="mean"
                    placeholder="뜻"
                    class="px-4 py-2 mx-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"/>
                <button
                    class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-pink-500 uppercase transition bg-transparent border-2 border-pink-500 rounded-full ripple hover:bg-pink-100 focus:outline-none">
                    저장
                </button>
            </div>

        </form>

    </div>
</template>

<script>

    export default {components: {},
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    }
    }
</script>