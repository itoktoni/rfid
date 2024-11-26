  <!--=====HEADER START=======-->
  @php
      $headers = collect(wp_get_nav_menu_items('header'))->where('menu_item_parent', 0);
      $submenus = collect(wp_get_nav_menu_items('header'))
          ->mapToGroups(function ($item, $key) {
              return [$item->menu_item_parent => $item];
          })
          ->toArray();
      unset($submenus[0]);

      //$submenus = json_decode(json_encode($submenus), false);

  @endphp


  <header>
      <div class="header-area homepage2 header header-sticky d-none d-lg-block " id="header">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="header-elements">
                          <div class="site-logo">
                              <a href="index.html"><img src="assets/images/logo/logo1.png" alt=""></a>
                          </div>
                          <div class="main-menu">

                              <ul>
                                  @foreach ($headers as $header)
                                      @if (isset($submenus[$header->ID]))
                                          <li><a href="{{ $header->url }}">{{ $header->title }} <i style="margin-left: 5px" class="fa-solid fa-angle-down"></i></a>
                                              <ul class="dropdown-padding">
                                                  @foreach ($submenus[$header->ID] as $menu)
                                                  <li><a href="{{ $menu->url }}">{{ $menu->title }}</a></li>
                                                  @endforeach
                                              </ul>
                                          </li>
                                      @else
                                            <li><a href="{{ $header->url }}">{{ $header->title }}</a></li>
                                      @endif
                                  @endforeach

                              </ul>

                              <a href="login.html" class="header-btn2">0811-1040-159</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!--=====HEADER END =======-->
