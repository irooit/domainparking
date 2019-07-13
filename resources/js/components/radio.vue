<template>
    <div>
        <div>
            <el-radio-group v-model="radio1">
                <el-radio-button label="上海"></el-radio-button>
                <el-radio-button label="北京"></el-radio-button>
                <el-radio-button label="广州"></el-radio-button>
                <el-radio-button :label="radio4"></el-radio-button>
            </el-radio-group>
        </div>
        <div style="margin-top: 20px">
            <el-radio-group v-model="radio2" size="medium">
                <el-radio-button label="上海" ></el-radio-button>
                <el-radio-button label="北京"></el-radio-button>
                <el-radio-button label="广州"></el-radio-button>
                <el-radio-button :label="radio4"></el-radio-button>
            </el-radio-group>
        </div>
        <div style="margin-top: 20px">
            <el-radio-group v-model="radio3" size="small">
                <el-radio-button label="上海"></el-radio-button>
                <el-radio-button label="北京" disabled ></el-radio-button>
                <el-radio-button label="广州"></el-radio-button>
                <el-radio-button :label="radio4"></el-radio-button>
            </el-radio-group>
        </div>
        <div style="margin-top: 20px">
            <el-radio-group v-model="radio4" size="mini">
                <el-radio-button label="上海"></el-radio-button>
                <el-radio-button label="北京"></el-radio-button>
                <el-radio-button label="广州"></el-radio-button>
                <el-radio-button :label="radio4"></el-radio-button>
                <el-radio-button label="苏州"></el-radio-button>
            </el-radio-group>
        </div>
    </div>
</template>

<script>
  export default {
    name: 'radio',
    data () {
      return {
        radio1: '上海',
        radio2: '广州',
        radio3: '深圳',
        radio4: '天津',
        radio5: 'suzhou'
      };
    }
  }
</script>
