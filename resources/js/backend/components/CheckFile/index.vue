<template>
    <div id="main">
        <div id="chart-container">           
        </div>
        <div style="position: absolute; top: calc(50% + 40px); left: calc(50% - 40px);">
            <el-button @click="$router.push({name:'Login'})">Login</el-button>
        </div>
    </div>
   
</template>
<script>
import * as echarts from 'echarts';

export default {
    mounted(){
        var chartDom = document.getElementById('chart-container');
        var myChart = echarts.init(chartDom);
        var option;

        option = {
        graphic: {
            elements: [
            {
                type: 'text',
                left: 'center',
                top: 'center',
                style: {
                text: 'Khánh Vinh Dev Tool',
                fontSize: 80,
                fontWeight: 'bold',
                lineDash: [0, 200],
                lineDashOffset: 0,
                fill: 'transparent',
                stroke: '#000',
                lineWidth: 1
                },
                keyframeAnimation: {
                duration: 3000,
                loop: true,
                keyframes: [
                    {
                    percent: 0.7,
                    style: {
                        fill: 'transparent',
                        lineDashOffset: 200,
                        lineDash: [200, 0]
                    }
                    },
                    {
                    // Stop for a while.
                    percent: 0.8,
                    style: {
                        fill: 'transparent'
                    }
                    },
                    {
                    percent: 1,
                    style: {
                        fill: 'black'
                    }
                    }
                ]
                }
            }
            ]
        }
        };

        option && myChart.setOption(option);
    }
}
</script>
<style>
#chart-container {
  position: relative;
  height: 100vh;
  overflow: hidden;
}

</style>
