<template>
    <h2>{{checkedbanks}}</h2>
</template>
<script>
    export default {
        props: [
            'checkedbanks'
        ]
    }
    mounted()
    {
        console.log('On Services component');
    }
</script>