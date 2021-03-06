<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ASIA PACKER TRAVEL</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="/izbooking/common/css/ress.min.css">
  <link rel="stylesheet" href="/izbooking/common/css/jquery-datepicker-ui.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
  <link rel="stylesheet" href="/izbooking/common/css/fontawesome.min.css">
  <link rel="stylesheet" href="/izbooking/common/css/slick.css">
  <link rel="stylesheet" href="/izbooking/common/css/main_sp.css">
</head>

<body>
  <div class="container">
    <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/header_sp.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/menu-mobile.php"; ?>

    <div class="top">
      <div class="block-filter-by">
        <form action="" method="">
          <div class="wrap">
            <div class="box-toggle">
              <p class="toggle-tl">Regions</p>
              <div class="toggle-cont region">
                <ul class="list-label">
                  <li class="item">
                    <input type="checkbox" name="regions" id="region-01" class="regions_btn">
                    <label for="region-01" class="lb-01">Southern Vietnam (20)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="regions" id="region-02" class="regions_btn">
                    <label for="region-02" class="lb-01">Red River Delta (40)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="regions" id="region-03" class="regions_btn">
                    <label for="region-03" class="lb-01">Halong Bay (10)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="regions" id="region-04" class="regions_btn">
                    <label for="region-04" class="lb-01">Northern Vietnam (22)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="regions" id="region-05" class="regions_btn">
                    <label for="region-05" class="lb-01">Northwest Vietnam (25)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="regions" id="region-06" class="regions_btn">
                    <label for="region-06" class="lb-01">Northeast Vietnam (11)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="regions" id="region-07" class="regions_btn">
                    <label for="region-07" class="lb-01">Northwest Vietnam (25)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="regions" id="region-08" class="regions_btn">
                    <label for="region-08" class="lb-01">Northeast Vietnam (11)</label>
                  </li>
                </ul>
                <div class="btn-show-more">
                  <a href="">Show more</a>
                </div>
              </div>
            </div>
            <div class="box-toggle">
              <p class="toggle-tl">Start & ending city</p>
              <div class="toggle-cont">
                <div class="start-end">
                  <div class="sr-city start-city">
                    <input type="text" name="start-city" class="search-city" id="start" placeholder="Starting city">
                    <label for="start" class="lb-02"><i class="fa fa-search"></i></label>
                  </div>
                  <div class="sr-city end-city">
                    <input type="text" name="end-city" class="search-city" id="end" placeholder="Ending city">
                    <label for="end" class="lb-02"><i class="fa fa-search"></i></label>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-toggle duration">
              <p class="toggle-tl">Duration</p>
              <div class="toggle-cont">
                <div class="box-range">
                  <p class="txt-val"><span id="dayMin"></span><span id="dayMax"></span></p>
                  <div class="box-inner">
                    <p class="range range-day" id="range-day">&nbsp;</p>
                    <input type="hidden" name="txtDay" id="txtDay">
                  </div>
                </div>
              </div>
            </div>
            <div class="box-toggle">
              <p class="toggle-tl">Departure date</p>
              <div class="toggle-cont">
                <div class="form-group select-icon select-calendar">
                  <input type="text" name="accommodation_date" id="accommodation_date" class="form-control datepicker"
                    data-format="MM dd, yy" placeholder="August, 18 2018" data-placeholder="Select a specific date"
                    readonly="readonly">
                </div>
              </div>
            </div>
            <div class="box-toggle duration">
              <p class="toggle-tl">Budget</p>
              <div class="toggle-cont">
                <div class="box-range">
                  <p class="txt-val"><span id="priceMin"></span><span id="priceMax"></span></p>
                  <div class="box-inner">
                    <p class="range range-price" id="range-price">&nbsp;</p>
                    <input type="hidden" name="txtPrice" id="txtPrice">
                  </div>
                </div>
                <p class="ttl">Price per day</p>
                <div class="box-range">
                  <p class="txt-val"><span id="price02Min"></span><span id="price02Max"></span></p>
                  <div class="box-inner">
                    <p class="range range-price02" id="range-price02">&nbsp;</p>
                    <input type="hidden" name="txtPrice02" id="txtPrice02">
                  </div>
                </div>
              </div>
            </div>
            <div class="box-toggle">
              <p class="toggle-tl">Accommodation</p>
              <div class="toggle-cont accommodation">
                <ul class="list-label">
                  <li class="item">
                    <input type="checkbox" name="accommodation" id="accommodation-01">
                    <label for="accommodation-01" class="lb-01"><i class="fa fa-close"></i>Hotel (20)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="accommodation" id="accommodation-02">
                    <label for="accommodation-02" class="lb-01"><i class="fa fa-close"></i>Hostel (40)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="accommodation" id="accommodation-03">
                    <label for="accommodation-03" class="lb-01"><i class="fa fa-close"></i>Lodge (25)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="accommodation" id="accommodation-04">
                    <label for="accommodation-04" class="lb-01"><i class="fa fa-close"></i>Home-stay (22)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="accommodation" id="accommodation-05">
                    <label for="accommodation-05" class="lb-01"><i class="fa fa-close"></i>Bungalow (25)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="accommodation" id="accommodation-06">
                    <label for="accommodation-06" class="lb-01"><i class="fa fa-close"></i>Resort (25)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="accommodation" id="accommodation-07">
                    <label for="accommodation-07" class="lb-01"><i class="fa fa-close"></i>Guesthouse (11)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="accommodation" id="accommodation-08">
                    <label for="accommodation-08" class="lb-01"><i class="fa fa-close"></i>Resort (25)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="accommodation" id="accommodation-09">
                    <label for="accommodation-09" class="lb-01"><i class="fa fa-close"></i>Guesthouse (11)</label>
                  </li>
                </ul>
                <div class="btn-show-more">
                  <a href="">Show more</a>
                </div>
              </div>
            </div>
            <div class="box-toggle">
              <p class="toggle-tl">Must see countries</p>
              <div class="toggle-cont">
                <div class="box-search">
                  <div class="search">
                    <input type="text" name="search" class="search-ipt" id="search" placeholder="Search">
                    <label for="search" class="lb-02"><i class="fa fa-search"></i></label>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-toggle">
              <p class="toggle-tl">Travel style</p>
              <div class="toggle-cont travel">
                <ul class="list-label">
                  <li class="item">
                    <input type="checkbox" name="travel" id="travel-01">
                    <label for="travel-01" class="lb-01"><i class="fa fa-close"></i>Hotel (20)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="travel" id="travel-02">
                    <label for="travel-02" class="lb-01"><i class="fa fa-close"></i>Hostel (40)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="travel" id="travel-03">
                    <label for="travel-03" class="lb-01"><i class="fa fa-close"></i>Lodge (25)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="travel" id="travel-04">
                    <label for="travel-04" class="lb-01"><i class="fa fa-close"></i>Home-stay (22)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="travel" id="travel-05">
                    <label for="travel-05" class="lb-01"><i class="fa fa-close"></i>Bungalow (25)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="travel" id="travel-06">
                    <label for="travel-06" class="lb-01"><i class="fa fa-close"></i>Resort (25)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="travel" id="travel-07">
                    <label for="travel-07" class="lb-01"><i class="fa fa-close"></i>Guesthouse (11)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="travel" id="travel-08">
                    <label for="travel-08" class="lb-01"><i class="fa fa-close"></i>Resort (25)</label>
                  </li>
                  <li class="item">
                    <input type="checkbox" name="travel" id="travel-09">
                    <label for="travel-09" class="lb-01"><i class="fa fa-close"></i>Guesthouse (11)</label>
                  </li>
                </ul>
                <div class="btn-show-more">
                  <a href="">Show more</a>
                </div>
              </div>
            </div>
          </div>
          <div class="box-results">
            <button type="submit" class="result">See results</button>
          </div>
        </form>
      </div>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/footer_sp.php"; ?>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT']."/izbooking/common/inc/common-js-sp.php"; ?>
  <script src="/izbooking/common/js/top/index.js"></script>
  <script src="/izbooking/common/js/filter.js"></script>
</body>

</html>