     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <?php

    function http_request($url)
    {
        // persiapkan curl
        $ch = curl_init();

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url);

        // set user agent    
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

        // return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch);

        // tutup curl 
        curl_close($ch);

        // mengembalikan hasil curl
        return $output;
    }

    $coronavirus_confirm = http_request("https://api.covid19api.com/country/indonesia/status/confirmed/live");
    $coronavirus_deaths = http_request("https://api.covid19api.com/country/indonesia/status/deaths/live");
    $coronavirus_recovered = http_request("https://api.covid19api.com/country/indonesia/status/recovered/live");

    // ubah string JSON menjadi array
    $coronavirus_confirm = json_decode($coronavirus_confirm, TRUE);
    $coronavirus_deaths = json_decode($coronavirus_deaths, TRUE);
    $coronavirus_recovered = json_decode($coronavirus_recovered, TRUE);
    ?>
    
    <script>
      Morris.Donut({
        element: 'corona_diagram',
        data: [
          {label: "Confirmed", value: <?php echo $coronavirus_confirm[count($coronavirus_confirm)-1]["Cases"] ?>},
          {label: "Deaths", value: <?php echo $coronavirus_deaths[count($coronavirus_deaths)-1]["Cases"] ?>},
          {label: "Recovered", value: <?php echo $coronavirus_recovered[count($coronavirus_recovered)-1]["Cases"] ?>}
        ],
        colors : ['#F50057', '#292D3E', '#8BC34A']
      });
    </script>

    <script>
        $(document).ready(function() {
            $('.slick-home').slick({
              autoplay : true,
              dots: true,
              infinite: true,
              speed: 300,
              slidesToShow: 3,
              slidesToScroll: 1,
              responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
              ]
            });
        });
    </script>

  </body>
</html>