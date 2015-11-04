do ->
  $('.articleContent ul.tabs').on 'click','li',(e) ->
    return if $(this).hasClass('active')
    $(this).addClass "active"
    $(this).siblings().removeClass("active")
    activeIndex = $(this).closest('ul').find('li').index(this)
    $('ul.articles').eq(activeIndex).removeClass "hide"
    $('ul.articles').eq(activeIndex).siblings("ul.articles").addClass "hide"

  $('.mostArticle ul.tabs').on 'click','li',(e) ->
    return if $(this).hasClass('active')
    $(this).addClass "active"
    $(this).siblings().removeClass("active")
    activeIndex = $(this).closest('ul').find('li').index(this)
    $('ul.most').eq(activeIndex).removeClass "hide"
    $('ul.most').eq(activeIndex).siblings("ul.most").addClass "hide"

  $('.slideControl').on 'click','li',(e) ->
    return if $(this).hasClass('active')
    $(this).addClass "active"
    $(this).siblings().removeClass("active")
    activeIndex = $(this).closest('ul').find('li').index(this)
    $('li.singleImage').eq(activeIndex).removeClass "hide"
    $('li.singleImage').eq(activeIndex).siblings("li").addClass "hide"
    $('li.singleStory').eq(activeIndex).removeClass "hide"
    $('li.singleStory').eq(activeIndex).siblings("li").addClass "hide"

