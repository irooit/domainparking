<template>
    <div class="body" :style="style">
        <div v-wechat-title="data.title"></div>
        <div class="full-content">
            <div class="inner-content-wrapper">
                <div class="header">
                    <!-- 提示域名可以转让 -->
                    <div class="top-text">您正在访问的域名可以转让！This domain is for sale.</div>
                    <!-- 提示域名可以转让 -->

                    <div class="inner1" v-if="typeof data.title !== undefined">
                        {{data.title}}
                    </div>

                    <div class="inner3">带您畅游域名的世界</div>

                    <!-- 搜索图标 -->


                    <div class="inner4">
                        <span class="chinese">如果您对该域名感兴趣，请联系</span>
                        <span style="color: red;">QQ/Wechat: 14451981</span>
                        <span class="chinese">提供您的报价.</span>
                        <br>
                        <span class="english">If you would like to purchase this domain,please contact me</span>
                        <span style="color: red;">Email: hi@feisudu.com </span>
                        <span class="english">to make an offer.</span>
                    </div>
                </div>
                <!-- 底部部分 -->
                <div class="footer">

                </div>
                <!-- 底部部分 -->


                <!-- 版权 -->
            </div>
        </div>
    </div>
</template>

<script>
  import Radio from '../components/radio'

  export default {
    name: "index",
    data () {
      return {
        data: window.laravel.data,
        style: {
          height: '600px;'
        }
      }
    },
    methods: {
      getHeight() {
        this.style.height = window.innerHeight + 'px';
      }
    },
    components: {
      Radio
    },
    created() {
      window.addEventListener('resize', this.getHeight);
      this.getHeight()
    }
  }
</script>

<style scoped>
    .body {
        min-width: 1004px;
        margin: 0;
        width: 100%;
        height: 100%;
    }
    .full-content {
        position: relative;
        height: 100%;
        background: url('../../img/body-bg-5.jpg') no-repeat center top;
    }

    .inner-content-wrapper {
        position: relative;
        width: 1000px;
        margin: auto;
        height: ;
    }
    .header {
        position: relative;
        height: 300px;
        padding-top: 52px;
    }
    .header .top-text {
        text-shadow: 0.5px 0.9px 0 rgba(255, 255, 255, 0.65);
        color: #6f5135;
        font-size: 16px;
        font-weight: 400;
        line-height: 35px;
        text-align: center;
    }
    .header .inner1 {
        color: #ff490a;
        color: #f76a4e;
        font-family: Impact;
        font-size: 50px;
        font-weight: 400;
        line-height: 45px;
        text-align: center;
        padding-top: 40px;
    }
    .header .inner3 {
        color: #f76a4e;
        font-size: 20px;
        font-weight: 700;
        line-height: 45px;
        text-align: center;
        padding-top: 8px;
        white-space: nowrap;
        overflow: hidden;
        max-width: 70%;
        margin: 30px auto;
        height: 45px;
    }
    .header .inner4 {
        display: block;
        text-align: center;
        margin-top: 100px;
        color: #6e5034;
        font-size: 16px;
        font-weight: 400;
        line-height: 30px;
        text-decoration: none;
    }
    .main-content {
        position: relative;
        display: inline-block;
        width: 1000px;
        margin-left: 25px;
        margin-top: 44px;
        min-height: 280px;
    }
    .main-content .info-wrapper {
        text-align: center;
        height: 270px;
        padding-top: 105px;
        margin-bottom: 20px;
    }
    .main-content .inner3 {
        position: relative;
        display: inline-block;
        text-align: left;
        margin-right: 92px;
        vertical-align: top;
    }

    .main-content .inner3 .text-item {
        font-weight: 400;
        line-height: 35px;
    }

    .main-content .inner1 {
        color: white;
        font-size: 18px;
        font-weight: 700;
        line-height: 36px;
        text-indent: 12px;
        position: absolute;
        top: -58px;
        left: 0;
        display: inline-block;
        width: 165px;
        height: 37px;
        background-image: url(/upload/images/common/unit-1.png);
    }
</style>
