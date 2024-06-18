jQuery(document).ready(function ($) {

  // get the values from the data attributes on the blog-grid element.
  var currentPage = $('#load_into').data('page');
  var pageType = $('#load_into').data('type');
  var cat = $('#load_into').data('cat');
  var term = $('#load_into').data('term');
  var nextPage = currentPage + 1;
  var maxPages = $('#load_into').data('max-pages');
  var endPointBase = $('#load_into').data('endpoint');
  var postsPerPage = $('#load_into').data('per-page');
  var postType = $('#load_into').data('post-type');

  let appendTo = '#d-gd';
  if (pageType === 1) {
    appendTo = '.row.row-gap';
  }

  // when the load more jobs button is clicked
  $('#load_into').find('.gd-btn.load-btn').click(function (event) {

    event.preventDefault();

    // store the button object to use later.
    myThis = $(this);

    myThis.attr('disabled', true);
    myThisOldHtml = myThis.html();

    myThis.html(`<svg width="20" height="20" viewBox="0 -0.013 0.425 0.425" xmlns="http://www.w3.org/2000/svg" class="si-glyph si-glyph-load"><path d="M.249.047c0 .025-.011.102-.024.102S.201.073.201.047.212.001.225.001s.024.021.024.046M.2.352C.2.327.211.251.224.251s.024.076.024.101S.237.397.224.397.2.377.2.352M.071.176C.097.176.174.187.174.2S.097.224.071.224.025.213.025.2.046.176.071.176m.307.049C.352.225.276.214.276.2S.353.175.378.175.424.186.424.2.403.225.378.225M.354.105C.336.123.274.169.265.16.255.15.302.089.32.071S.36.046.37.056s.003.032-.015.05m-.26.19C.113.278.174.232.184.242S.148.313.13.33.09.354.081.345.078.313.096.296M.13.07c.018.018.065.08.056.09S.114.123.095.104C.077.086.07.064.079.054S.111.052.129.07M.32.33C.302.312.255.25.265.24s.072.037.09.055.025.04.015.05S.338.348.32.33" class="si-glyph-fill" fill="#434343" fill-rule="evenodd"/></svg> Loading`);


    // build the endpoint url.
    var endPointUrl = endPointBase + '?per_page=' + postsPerPage + '&page=' + nextPage + '&post_type=' + postType + '&page_type=' + pageType;

    if (pageType === 2 && cat) {
      endPointUrl += '&cat=' + cat;
    }

    if (pageType === 2 && term) {
      endPointUrl += '&search=' + term;
    }

    // go and get the next posts.
    $.get(

      // url to get the posts from - rest api.
      endPointUrl,

      function (data) {

        parentContainer = $(myThis).parents('.container');

        // append the returned new posts before the loadmore button.
        parentContainer.find(appendTo).append(data);

        // update the current page number.
        parentContainer.attr('data-page', nextPage);

        // set the new current page (now the next page)
        currentPage = nextPage;

        // set the nextpage which is one more than the current nextpage.
        nextPage = nextPage + 1;

        // if the nextPage is greater than the max pages.
        if (nextPage > maxPages) {

          // remove the load more button as there are no more posts to load.
          $(myThis).parent().remove();

        }

        // remove the loading class.
        myThis.html(myThisOldHtml);
        myThis.removeAttr('disabled');

      }

    );

  });

});