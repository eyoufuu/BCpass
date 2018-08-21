Page({

  /**
   * 页面的初始数据
   */
  data: {
    id: 0,
    grids1: [
      { id: 0, city: 1, cat: 1, name: 'aaa', location: 'bbb', image1: '', image2: '', description: '' }
    ]
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.setData({
      id: options.id
    })
    var that = this
    var id = this.data.id

    wx.request({
      url: 'http://localhost/restaurand.php?detail=' + id,
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