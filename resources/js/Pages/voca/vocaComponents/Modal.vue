<template>
    <div class="white-bg">
        <div>
            모달
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-warning" @click="$emit('close')">닫기</button>
        </div>
    </div>
</template>

<script>

    export default {
        props:['state'],
        methods: {
            
        },
        
    }
</script>

<style scoped="scoped">
    .black-bg {
        width: 100%;
        height: 100%;
        background: rgba(57, 17, 90, 0.5);
        position: fixed;
        padding: 20px;
    }
    .white-bg {
        width: 30%;
        background: white;
        border-radius: 8px;
        padding: 20px;
        position: absolute;
        top: 35%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>