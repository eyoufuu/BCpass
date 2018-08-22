Page({

  /**
   * 页面的初始数据
   */
  data: {
    index: 0,
    grids1: [
      { id: 0, city: 1, cat: 1, name: 'aaa', location: 'bbb', image1: '', image2: '', description: '' }
    ],
    kindindex:0,
    kind:['restaurant','service','shopping','spot']
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.setData({
      index: options.id,
      kindindex: options.kindindex
    })
    var that = this
    var cat = that.data.kind[that.data.kindindex]
    wx.request({
      url: 'http://wx.vancent.net/bcpass/'+cat+'.php?detail=' + that.data.index,
      method: 'GET',
      success: function (res) {
        console.log(res.data),
          that.setData({
            grids1: res.data
          })
        // console.log(grids1)  
      },
      fail: function (res) {
        console.log(res)
      }
    })
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
    
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
    
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {
    
  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {
    
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {
    
  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
    
  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {
    
  }
})