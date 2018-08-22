Page({
  data: {
    filterId: 1,
    currency: '',
    address: 'ANU, Acton',
    recentAct: [],
    banners: [{
        id: 9998,
        image: '../../imgs/tabBar/bk1.png',
        url: 'https://mp.weixin.qq.com/s?__biz=MzU3MjExNjE0Ng==&mid=2247484040&idx=1&sn=9f061ed9a920c51c9d443e303d7a2a3e&chksm=fcd49f55cba31643c2a700db716c08c7bc675479e5c263388fe6cf1534eb2004b417ce98a257&mpshare=1&scene=1&srcid=0818K4ORO1loJhEY9IZZ9701#rd',
        name: 'Asian Supa Grocery'
      },
      {
        id: 9999,
        image: '../../imgs/tabBar/bk2.png',
        url: 'https://mp.weixin.qq.com/s?__biz=MzU3MjExNjE0Ng==&mid=2247484040&idx=1&sn=9f061ed9a920c51c9d443e303d7a2a3e&chksm=fcd49f55cba31643c2a700db716c08c7bc675479e5c263388fe6cf1534eb2004b417ce98a257&mpshare=1&scene=1&srcid=0818K4ORO1loJhEY9IZZ9701#rd',
        name: 'ALDI'
      }
    ],
    icons: [
      [{
          id: 1,
          img: '/imgs/index/icon_1.jpg',
          name: '餐厅',
          category: 'Food',
          url: ''
        },
        // {
        //   id: 3,
        //   img: '/imgs/index/icon_7.jpg',
        //   name: '小程序',
        //   category: 'Activity',
        //   url: ''
        // },
      ]
    ],
  },
  onLoad: function() {
    var that = this;
    wx.showLoading({
      title: 'Loading...',
    })
    wx.request({
      url: 'http://wx.vancent.net/bcpass/recentactives.php',
      //url: 'https://aws.canberracircle.com/yp/api/activity',
      success: function(res) {
        var newbanners = [];
        var oldbanners = that.data.banners
        var recent = []
        console.log(res.data)
        for (var i = 0; i < res.data.length; i++) {
          res.data[i].image = res.data[i].image
          res.data[i].thumbnail = res.data[i].thumbnail
          if (res.data[i].tag === 'banner') {
            newbanners.push(res.data[i])
          } else if (res.data[i].tag === 'recent') {
            recent.push(res.data[i])
          }
        }
        for (var i = 0; i < oldbanners.length; i++) {
          newbanners.push(oldbanners[i])
        }
        console.log(that.data.banners)
        that.setData({
          banners: newbanners,
          recentAct: recent
        })
        console.log(that.data.banners)
      },
      fail: function(res) {
        console.log('failed to log banner info')
      }
    })

    wx.request({
      url: 'http://free.currencyconverterapi.com/api/v5/convert?q=CAD_CNY&compact=y',
      method: 'GET',
      success: function(res) {
        console.log(res),
          that.setData({
            currency: res.data.CAD_CNY.val.toPrecision(5) + ' 仅供参考'
          })
      },
      fail: function(res) {
        console.log('failed', res.data),
          that.setData({
            currency: '查询失败'
          })
      }
    })


    wx.hideLoading();
    // 该url已失效
    //   wx.request({
    //     url: '',
    //     success: function (res) {
    //       that.setData({
    //         currency: res.data.rate.substring(0, 5)
    //       })
    //       console.log('success basic', res.data)
    //     },
    //     fail: function (res) {
    //       console.log('failed to load basic')
    //     }
    //   })
    //   wx.hideLoading()    
  },
  onShow: function() {},
  toNearby: function(event) {
    var self = this;
    var tag = event.currentTarget.id
    wx.setStorageSync('category', tag)
    wx.navigateTo({
      url: '../restaurant/restaurant',
    })
  },

  tapBanner: function(e) {
    var url = e.currentTarget.id;
    wx.setStorageSync('article_url', url)
    wx.navigateTo({
      url: '../articles/articles',
    })
  },
  // 第二个图标
  toMore: function() {
    wx.navigateTo({
      url: '../service/service',
    })
  },
  // 第三个图标
  toJobs: function() {
    wx.setStorageSync('category', 'Jobs')
    wx.navigateTo({
      url: '../shopping/shopping',
    })
  },
  // 转发设置
  onShareAppMessage: function() {
    var obj = {}
    obj = {
      title: 'BC Adventure Pass商家汇总！',
      imageUrl: '/imgs/cover.jpg',
      success: function() {
        wx.showToast({
          title: '转发成功',
          icon: 'success',
          duration: 0.5,
          mask: true,
        })
      },
    }
    return obj;
  }
});