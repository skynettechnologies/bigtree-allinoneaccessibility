<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="BigTree CMS" />
</head>


<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host     = $_SERVER['HTTP_HOST'];
$baseUrl  = $protocol . $host . '/';  // add slash at the end

// Current directory of this file
$currentDir = __DIR__;

// Find the position of 'extensions' in the path
$pos = strpos($currentDir, DIRECTORY_SEPARATOR . 'extensions' . DIRECTORY_SEPARATOR);

if ($pos !== false) {
  // Extract folder name after 'extensions/'
  $afterExtensions = substr($currentDir, $pos + strlen(DIRECTORY_SEPARATOR . 'extensions' . DIRECTORY_SEPARATOR));
  $parts = explode(DIRECTORY_SEPARATOR, $afterExtensions);
  $vendorFolder = $parts[0]; // This is the dynamic folder after extensions
}

// Construct dynamic module path
$modulePath = $baseUrl . 'extensions/' . $vendorFolder . '/modules/' . $parts[2] . '/'; // Assuming second part is module name

?>

<!-- CSS -->
<link rel="stylesheet" href="<?php echo $modulePath; ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $modulePath; ?>css/style.css">

<!-- JS -->
<script src="<?php echo $modulePath; ?>js/bootstrap.bundle.min.js"></script>



<style>
  .btn [class*=" icon-"],
  .btn [class^=icon-],
  .s-btn [class*=" icon-"],
  .s-btn [class^=icon-],
  [class*=" icon-"],
  [class^=icon-],
  i.icon,
  span.icon {
    display: contents;
  }

  .all-in-one-accessibility-wrap .accessibility-settings .all-one-accessibility-form .icon-size-wrapper .option,
  .all-in-one-accessibility-wrap .accessibility-settings .all-one-accessibility-form .icon-type-wrapper .option {
    width: 130px;
    height: 130px;
    padding: 10px !important;
    text-align: center;
    background-color: #3c007f !important;
    outline: 4px solid #fff;
    outline-offset: -4px;
    border-radius: 10px;
  }

  a {
    color: #0d6efd;
    text-decoration: none;
  }

  .set-width {
    max-width: 810px;
    margin: 0 auto;
  }
</style>

<body>

  <div id="load" class="">
    <div class="load-wrap">
      <div class="img-text-wrapper">
        <div class="text-wrapper"> Loading... </div>
      </div>
    </div>
  </div>
  <div class="thinkific-wrap-block">
    <div class="container">
      <div class="set-width">
        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active" id="all-in-one-accessibility" role="tabpanel" aria-labelledby="all-in-one-accessibility-tab">
            <div class="all-in-one-accessibility-wrap">
              <div class="accessibility-settings">
                <div class="row justify-content-center py-4">
                  <img src="https://payload.skynettechnologies.us/assets/images/all-in-one-accessibility-logo.svg" alt="" height="70px" srcset="">
                </div>
                <div class="all-one-accessibility-form">
                  <div class="all-one-accessibility-form-inner">
                    <!-- <p style="display: none;" id="domainnm"><?php echo $base_url ?> </p> -->
                    <form id="widget-form" name="widget-form" class="form-controler">
                      <div class="mb-3 row">
                        <div class="col-sm-12">
                          <div class="form-text">
                            <B>NOTE: Currently, All in One Accessibility is dedicated to enhancing accessibility
                              specifically for websites and online stores.</B>
                          </div>
                          <B>
                            <p class="form-text" id="upgrade_html_notes">Please <a
                                href="https://ada.skynettechnologies.us/trial-subscription" target="_blank">Upgrade</a>
                              to full
                              version of All in One Accessibility Pro with 10 days free trial.</p>
                          </B>
                        </div>
                      </div>

                  </div>

                  <div class="mb-3 row " id="colorcode_html">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Hex color code:</label>
                    <div class="col-sm-9">
                      <input type="text" name="colorcode" style="height:auto" class="form-control" id="colorcode" value="" />
                      <div class="form-text">You can customize the ADA Widget color. For example: FF5733</div>
                    </div>
                  </div>
                  <div class="icon-custom-position-wrapper mb-3 row">
                    <div class="mb-2 pe-0 ps-0">
                      <label class="custom-switcher ">
                        <span class="custom-switcher_right">
                          <input type="checkbox" id="custom-position-switcher" class="custom-switcher_inp_2" value="" />
                          <span class="custom-switcher_body" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Toggle to override <Top Left> position" data-bs-custom-class="switcher-tooltip">
                          </span>
                          <span class="custom-switcher_label">Enable precise accessibility widget icon position:</span>
                        </span>
                      </label>
                      <div class="custom-position-controls hide">
                        <div class="row">
                          <div class="col-auto">
                            <div class="input-group mb-3">
                              <input type="number" style="height:auto" min="0" max="250" class="form-control" id="custom_position_x_value"
                                aria-label="Value in pixels" aria-describedby="pos-value-input_1" oninput="this.value = Math.min(Math.max(this.value, 0), 250)" />
                              <span class="input-group-text" style="height:auto" id="pos-value-input_1">PX</span>
                            </div>
                          </div>
                          <div class="col-auto">
                            <select class="form-select" style="height:auto;width: 150px;" aria-label="Default select example">
                              <option selected value="cust-pos-to-the-right">To the right</option>
                              <option value="cust-pos-to-the-left">To the left</option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-auto">
                            <div class="input-group mb-3">
                              <input type="number" style="height:auto" min="0" max="250" class="form-control" id="custom_position_y_value"
                                aria-label="Value in pixels" aria-describedby="pos-value-input_2" oninput="this.value = Math.min(Math.max(this.value, 0), 250)" />
                              <span class="input-group-text" style="height:auto" id="pos-value-input_2">PX</span>
                            </div>
                          </div>
                          <div class="col-auto">
                            <select class="form-select" style="height:auto;width: 150px;" aria-label="Default select example">
                              <option selected value="cust-pos-to-the-lower">To the bottom</option>
                              <option value="cust-pos-to-the-upper">To the top</option>
                            </select>
                          </div>
                        </div>
                        <div class="description">0 - 250px are permitted values</div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 row widget-position" id="position_html">
                    <label class="fcol-sm-3 col-form-label">Where would you like to place the accessibility icon on your
                      site?
                    </label>
                    <div class="col-sm-12 three-col">
                      <div
                        class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                        <input type="radio" id="edit-position-top-left" name="position" value="top_left"
                          class="form-radio" />

                        <label for="edit-position-top-left" class="option">Top left</label>
                      </div>
                      <div
                        class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                        <input type="radio" id="edit-position-top-center" name="position" value="top_center"
                          class="form-radio" />

                        <label for="edit-position-top-center" class="option">Top Center</label>
                      </div>
                      <div
                        class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                        <input type="radio" id="edit-position-top-right" name="position" value="top_right"
                          class="form-radio" />

                        <label for="edit-position-top-right" class="option">Top Right</label>
                      </div>
                      <div
                        class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                        <input type="radio" id="edit-position-middel-left" name="position" value="middel_left"
                          class="form-radio" />

                        <label for="edit-position-middel-left" class="option">Middle left</label>
                      </div>
                      <div
                        class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                        <input type="radio" id="edit-position-middel-right" name="position" value="middel_right"
                          class="form-radio" />

                        <label for="edit-position-middel-right" class="option">Middle Right</label>
                      </div>
                      <div
                        class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                        <input type="radio" id="edit-position-bottom-left" name="position" value="bottom_left"
                          class="form-radio" />

                        <label for="edit-position-bottom-left" class="option">Bottom left</label>
                      </div>
                      <div
                        class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                        <input type="radio" id="edit-position-bottom-center" name="position" value="bottom_center"
                          class="form-radio" />

                        <label for="edit-position-bottom-center" class="option">Bottom Center</label>
                      </div>
                      <div
                        class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                        <input type="radio" id="edit-position-bottom-right" checked="" name="position"
                          value="bottom_right" class="form-radio" />

                        <label for="edit-position-bottom-right" class="option">Bottom Right</label>
                      </div>
                    </div>
                  </div>
                  <!-- widget icon size -->

                  <h3 class="text-dark">Select Widget Size:</h3>
                  <div class="form-radios  mb-3">
                    <div class="form-radio-item">
                      <input data-drupal-selector="edit-widget-size-regularsize" aria-describedby="edit-widget-size--description" type="radio" id="edit-widget-size-regularsize" name="widget_size" value="0" checked="checked" class="form-radio form-boolean form-boolean--type-radio" wfd-id="id15">
                      <label for="edit-widget-size-regularsize" class="form-item__label option">Regular Size</label>
                    </div>
                    <div class="form-radio-item">
                      <input data-drupal-selector="edit-widget-size-oversize" aria-describedby="edit-widget-size--description" type="radio" id="edit-widget-size-oversize" name="widget_size" value="1" class="form-radio form-boolean form-boolean--type-radio" wfd-id="id16">
                      <label for="edit-widget-size-oversize" class="form-item__label option">Oversize</label>
                    </div>
                    <div style="font-size: small;" id="edit-widget-size--wrapper--description" data-drupal-field-elements="description" class="fieldset__description">It only works on desktop view.</div>
                  </div>


                  <div class="icon-type-wrapper row " id="select_icon_type">
                    <label class="fcol-sm-12 col-form-label" style="margin-left: -10.500px; margin-right: -10.500px;">Select icon type:</label>
                    <div class="col-sm-12" style=" margin-right: -15px;">
                      <div class="row">

                        <?php

                        for ($i = 1; $i <= 29; $i++) {
                        ?>
                          <div class="col-auto mb-30">
                            <div class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                              <input type="radio" id="edit-type-<?= $i ?>" checked="" name="aioa_icon_type" value="aioa-icon-type-<?= $i ?>" class="form-radio" />
                              <label for="edit-type-<?= $i ?>" class="option">
                                <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-<?= $i ?>.svg"
                                  width="65" height="65" style="height: 65px;" />
                                <span class="visually-hidden">Type <?= $i ?></span>
                              </label>
                            </div>
                          </div>
                        <?php
                        }

                        ?>

                      </div>
                    </div>

                    <div class="icon-custom-size-wrapper mb-3 row">
                      <div class="col-sm-12">
                        <label class="custom-switcher ">
                          <span class="custom-switcher_right">
                            <input type="checkbox" id="custom-size-switcher" class="custom-switcher_inp_2" />
                            <span class="custom-switcher_body" data-bs-toggle="tooltip" data-bs-placement="bottom"
                              title="Toggle to override selected size" data-bs-custom-class="switcher-tooltip">
                            </span>
                            <span class="custom-switcher_label">Enable icon custom size:</span>
                          </span>
                        </label>
                        <div class="custom-size-controls hide">
                          <div class="row">

                          </div>
                          <div class="col-auto controls">
                            <label for="exact-icon-size" class="form-label">Select exact icon size:</label>
                            <div class="input-group mb-2">
                              <input type="number" class="form-control" style="height:auto" id="widget_icon_size_custom" name="widget_icon_size_custom" value="" min="20" max="150" aria-label="Value in pixels" aria-describedby="size-value-input_1" />
                              <span class="input-group-text" style="height:auto" id="size-value-input_1">PX</span>
                            </div>
                            <div class="description">20 - 150px are permitted values</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="icon-size-wrapper widget-icon row " id="select_icon_size">
                    <label class="fcol-sm-12 col-form-label">Select icon size for Desktop: </label>

                    <div class="col-sm-12" style="padding-right: calc(var(--bs-gutter-x)* .2);padding-left: calc(var(--bs-gutter-x)* .2);">
                      <div class="row">
                        <div class="col-auto mb-30">
                          <div
                            class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                            <input type="radio" id="edit-size-big" name="aioa_icon_size" value="aioa-big-icon"
                              class="form-radio" />
                            <label for="edit-size-big" class="option">
                              <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg"
                                width="75" height="75" style="height: 75px;" class="iconimg" />
                              <span class="visually-hidden">Big</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-auto mb-30">
                          <div
                            class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                            <input type="radio" id="edit-size-medium" checked="" name="aioa_icon_size"
                              value="aioa-medium-icon" class="form-radio" />
                            <label for="edit-size-medium" class="option">
                              <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg"
                                width="65" height="65" style="height: 65px;" class="iconimg" />
                              <span class="visually-hidden">Medium</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-auto mb-30">
                          <div
                            class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                            <input type="radio" id="edit-size-default" name="aioa_icon_size" value="aioa-default-icon"
                              class="form-radio" />
                            <label for="edit-size-default" class="option">
                              <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg"
                                width="55" height="55" style="height: 55px;" class="iconimg" />
                              <span class="visually-hidden">Default</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-auto mb-30">
                          <div
                            class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                            <input type="radio" id="edit-size-small" name="aioa_icon_size" value="aioa-small-icon"
                              class="form-radio" />
                            <label for="edit-size-small" class="option">
                              <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg"
                                width="45" height="45" style="height: 45px;" class="iconimg" />
                              <span class="visually-hidden">Small</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-auto mb-30">
                          <div
                            class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                            <input type="radio" id="edit-size-extra-small" name="aioa_icon_size"
                              value="aioa-extra-small-icon" class="form-radio" />
                            <label for="edit-size-extra-small" class="option">
                              <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg"
                                width="35" height="35" style="height: 35px;" class="iconimg" />
                              <span class="visually-hidden">Extra Small</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="icon-size-wrapper row" style="display: none">
                    <label class="fcol-sm-12 col-form-label">Select icon size for mobile: </label>
                    <div class="col-sm-12">
                      <div class="row">
                        <div class="col-auto mb-30">
                          <div class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                            <input type="radio" id="edit-size-big" name="aioa_icon_size_mb" value="aioa-big-icon-mb" class="form-radio" />
                            <label for="edit-size-big" class="option">
                              <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg" width="75" height="75" />
                              <span class="visually-hidden">Big</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-auto mb-30">
                          <div class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                            <input type="radio" id="edit-size-medium" checked="" name="aioa_icon_size_mb" value="aioa-medium-icon-mb" class="form-radio" />
                            <label for="edit-size-medium" class="option">
                              <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg" width="65" height="65" />
                              <span class="visually-hidden">Medium</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-auto mb-30">
                          <div class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                            <input type="radio" id="edit-size-default" name="aioa_icon_size_mb" value="aioa-default-icon-mb" class="form-radio" />
                            <label for="edit-size-default" class="option">
                              <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg" width="55" height="55" />
                              <span class="visually-hidden">Default</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-auto mb-30">
                          <div class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                            <input type="radio" id="edit-size-small" name="aioa_icon_size_mb" value="aioa-small-icon-mb" class="form-radio" />
                            <label for="edit-size-small" class="option">
                              <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg" width="45" height="45" />
                              <span class="visually-hidden">Small</span>
                            </label>
                          </div>
                        </div>
                        <div class="col-auto mb-30">
                          <div
                            class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                            <input type="radio" id="edit-size-extra-small" name="aioa_icon_size_mb"
                              value="aioa-extra-small-icon-mb" class="form-radio" />
                            <label for="edit-size-extra-small" class="option">
                              <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg"
                                width="35" height="35" />
                              <span class="visually-hidden">Extra Small</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="save-changes-btn">
                    <button type="button" id="submit" class="btn btn-primary">Save Changes</button>
                  </div>

                  <div class="mt-3 row " id="save-changes-success">
                    <div class="col-sm-12">
                      <div class="form-text">It may take a few seconds for changes to appear on your website. If you
                        don't see the changes, try clearing your browser cache or checking in a private browsing window.
                      </div>
                    </div>
                  </div>


                </div>
                </form>
                <!-- <input type="hidden" id="saved_icon_type" value="<?= $selected_store_result[0]->aioa_icon_type ?>">
                                    <input type="hidden" id="saved_icon_size" value="<?= $selected_store_result[0]->aioa_icon_size ?>">
                                    <input type="hidden" id="saved_icon_size_mb" value="<?= $selected_store_result[0]->aioa_icon_size_mb ?>"> -->
                <input type="hidden" id="saved_icon_type" value="">
                <input type="hidden" id="saved_icon_size" value="">
                <input type="hidden" id="saved_icon_size_mb" value="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

<script>
  window.onload = function() {
    // Reset scroll position to the top
    window.scrollTo(0, 0);
  };

  document.addEventListener("DOMContentLoaded", function(event) {
    var $load = document.getElementById("load");
    var removeLoading = setTimeout(function() {
      $load.className += "loader-removed";
    }, 500);
  });

  const defaultSettings = {
    widget_position: "bottom_right",
    widget_color_code: "#420083",
    widget_icon_type: "aioa-icon-type-1",
    widget_icon_size: "aioa-default-icon",
  };

  $(document).ready(function() {

    async function fetchWidgetSettings(url) {

      const defaultSettings = {
        widget_position: 'bottom-right',
        widget_color_code: '#420083',
        widget_icon_type: 'default',
        widget_icon_size: 40,
        widget_size: 60,
        widget_icon_size_custom: 0
      };

      async function callApi() {
        try {
          // Make POST request to external API
          const formData = new URLSearchParams({
            website_url: url
          });
          const response = await fetch('https://ada.skynettechnologies.us/api/widget-settings', {
            method: 'POST',
            body: formData
          });
          const res = await response.json();

          if (!res.Data || res.Data.length === 0) {
            // If empty, register first (simulate getWidgetInfo)
            await getWidgetInfo(url);

            // Wait 1 second
            await new Promise(r => setTimeout(r, 1000));

            // Retry
            return await callApi();
          }

          return res.Data;
        } catch (err) {
          console.error('API call failed', err);
          throw err;
        }
      }

      // Call API and process result
      try {
        const result = await callApi();

        const settings = {
          widget_position: result.widget_position || defaultSettings.widget_position,
          widget_color_code: result.widget_color_code || defaultSettings.widget_color_code,
          widget_icon_type: result.widget_icon_type || defaultSettings.widget_icon_type,
          widget_icon_size: result.widget_icon_size || defaultSettings.widget_icon_size,
          widget_size: result.widget_size || defaultSettings.widget_size,
          widget_icon_size_custom: result.widget_icon_size_custom || defaultSettings.widget_icon_size_custom,
          widget_position_top: result.widget_position_top || 0,
          widget_position_bottom: result.widget_position_bottom || 0,
          widget_position_left: result.widget_position_left || 0,
          widget_position_right: result.widget_position_right || 0,
          is_widget_custom_size: result.is_widget_custom_size || 0,
          is_widget_custom_position: result.is_widget_custom_position || 0
        };

        populateSettings(settings);
        populatecustom(settings);

      } catch (err) {
        console.error('Failed to fetch widget settings', err);
      }
    }

    // Example stub for getWidgetInfo (replace with actual registration logic)
    async function getWidgetInfo(req) {
      // Current UTC datetime in ISO 8601 format
      const now = new Date();
      const dateTime = now.toISOString(); // "YYYY-MM-DDTHH:mm:ss.sssZ"

      // Prepare POST fields
      const postData = new URLSearchParams({
        name: '', // can be empty if not passed
        company_name: '',
        website: btoa(req.url), // base64 encode
        package_type: 'free-widget',
        start_date: dateTime,
        end_date: '',
        price: '',
        discount_price: '0',
        platform: 'BigTree CMS',
        api_key: '',
        is_trial_period: '',
        is_free_widget: '1',
        bill_address: '',
        country: '',
        state: '',
        city: '',
        post_code: '',
        transaction_id: '',
        subscr_id: '',
        payment_source: ''
      });

      try {
        const response = await fetch('https://ada.skynettechnologies.us/api/add-user-domain', {
          method: 'POST',
          body: postData
        });

        const data = await response.json();

        // ✅ Check if status is 0
        if (data.status == 0) {
          // call your custom function here
          saveSettings();
          return; // stop further execution
        }
        return data;
      } catch (err) {
        throw err;
      }
    }


    // Usage
    fetchWidgetSettings('<?= $host ?>');


  });



  function populateSettings(settings) {


    if (settings.is_widget_custom_size === 1) {
      $("#custom-size-switcher").prop("checked", true);
      $(".custom-size-controls").removeClass("hide");
      $(".widget-icon").addClass("hide");
    } else {
      $("#custom-size-switcher").prop("checked", false);
      $(".custom-size-controls").addClass("hide");
      $(".widget-icon").removeClass("hide");
    }


    $("#custom-size-switcher").click(function() {
      settings.is_widget_custom_size = $(this).is(":checked") ? 1 : 0;
      if (settings.is_widget_custom_size === 1) {
        $(".custom-size-controls").removeClass("hide");
        $(".widget-icon").addClass("hide");
      } else {
        $(".custom-size-controls").addClass("hide");
        $(".widget-icon").removeClass("hide");
      }
    });


    setTimeout(() => {

      $("#custom-size-switcher").prop("checked", settings.is_widget_custom_size === 1);
      if (settings.is_widget_custom_size === 1) {
        $(".custom-size-controls").removeClass("hide");
        $(".widget-icon").addClass("hide");
      } else {
        $(".custom-size-controls").addClass("hide");
        $(".widget-icon").removeClass("hide");
      }
    }, 1000);


    // custom position switcher
    if (settings.is_widget_custom_position === 1) {
      $("#custom-position-switcher").prop("checked", true); // Check the checkbox
      $(".custom-position-controls").removeClass("hide"); // Show custom size controls
      $(".widget-position").addClass("hide"); // Hide widget icon
    } else {
      $("#custom-position-switcher").prop("checked", false); // Uncheck the checkbox
      $(".custom-position-controls").addClass("hide"); // Hide custom size controls
      $(".widget-position").removeClass("hide"); // Show widget icon
    }

    // Toggle behavior for #custom-size-switcher
    $("#custom-position-switcher").click(function() {


      settings.is_widget_custom_position = $(this).is(":checked") ? 1 : 0; // Update the value
      if (settings.is_widget_custom_position === 1) {
        $(".custom-position-controls").removeClass("hide");
        $(".widget-position").addClass("hide");
      } else {
        $(".custom-position-controls").addClass("hide");
        $(".widget-position").removeClass("hide");
      }
    });

    setTimeout(() => {

      $("#custom-position-switcher").prop("checked", settings.is_widget_custom_position === 1);
      if (settings.is_widget_custom_position === 1) {
        $(".custom-position-controls").removeClass("hide");
        $(".widget-position").addClass("hide");
      } else {
        $(".custom-position-controls").addClass("hide");
        $(".widget-position").removeClass("hide");
      }
    }, 1000);

    const colorField = document.getElementById("colorcode");
    if (colorField) {
      colorField.value = settings.widget_color_code;
    }
    const typeOptions = document.querySelectorAll('input[name="aioa_icon_type"]');

    typeOptions.forEach((option) => {
      if (option.value === settings.widget_icon_type) {
        option.checked = true;
      }
    });

    const sizeOptions = document.querySelectorAll('input[name="aioa_icon_size"]');
    sizeOptions.forEach((option) => {
      if (option.value === settings.widget_icon_size) {
        option.checked = true;
      }
    });

    const iconImg = `https://www.skynettechnologies.com/sites/default/files/${settings.widget_icon_type}.svg`;
    $(".iconimg").attr("src", iconImg);

    const widget_icon_size_custom = document.getElementById("widget_icon_size_custom");
    if (widget_icon_size_custom) {
      widget_icon_size_custom.value = settings.widget_icon_size_custom;
    }
    const positionRadio = document.querySelector(`input[name="position"][value="${settings.widget_position}"]`);
    if (positionRadio) {
      positionRadio.checked = true;
    }
    const widget_size = document.querySelector(`input[name="widget_size"][value="${settings.widget_size}"]`);
    if (widget_size) {
      widget_size.checked = true;
    }

    // Set custom position fields
    const customPositionXField = document.getElementById("custom_position_x_value");

    const xDirectionSelect = $(".custom-position-controls select")[0];

    if (customPositionXField && xDirectionSelect) {
      if (settings.widget_position_right > 0) {
        customPositionXField.value = settings.widget_position_right;
        xDirectionSelect.value = "cust-pos-to-the-right";
      } else if (settings.widget_position_left > 0) {
        customPositionXField.value = settings.widget_position_left;
        xDirectionSelect.value = "cust-pos-to-the-left";
      } else {
        customPositionXField.value = 0;
        xDirectionSelect.value = "cust-pos-to-the-right"; // Default direction
      }
    }


    const customPositionYField = document.getElementById("custom_position_y_value");

    const yDirectionSelect = $(".custom-position-controls select")[1];
    if (customPositionYField && yDirectionSelect) {
      if (settings.widget_position_bottom > 0) {
        customPositionYField.value = settings.widget_position_bottom;
        yDirectionSelect.value = "cust-pos-to-the-lower";
      } else if (settings.widget_position_top > 0) {
        customPositionYField.value = settings.widget_position_top;
        yDirectionSelect.value = "cust-pos-to-the-upper";
      } else {
        customPositionYField.value = 0;
        yDirectionSelect.value = "cust-pos-to-the-lower"; // Default direction
      }
    }

  }

  let is_widget_custom_position = 0;
  let is_widget_custom_size = 0;

  function populatecustom(settings) {

    // Fetch the settings value for custom position and set the checkbox state
    is_widget_custom_position = settings.is_widget_custom_position !== undefined ? settings.is_widget_custom_position : 0;
    $("#custom-position-switcher").prop("checked", is_widget_custom_position === 1);

    // Fetch the settings value for custom size and set the checkbox state
    is_widget_custom_size = settings.is_widget_custom_size !== undefined ? settings.is_widget_custom_size : 0;
    $("#custom-size-switcher").prop("checked", is_widget_custom_size === 1);

    // Handle click event for custom position switcher
    $("#custom-position-switcher").click(function() {
      // Set value based on checkbox state
      is_widget_custom_position = $(this).is(":checked") ? 1 : 0;
    });

    // Handle click event for custom size switcher
    $("#custom-size-switcher").click(function() {
      // Set value based on checkbox state
      is_widget_custom_size = $(this).is(":checked") ? 1 : 0;
    });
  }
  // Function to update the server name on dropdown change

  $("#submit").click(function() {

    saveSettings(true);

  });

  function saveSettings(useDefaults = false) {

    if (useDefaults) {
      showLoader();
    }
    const server_name = "<?php echo $host; ?>";

    // Read values or use defaults
    // Read values or use defaults (reversed logic)
    const colorcode = useDefaults ?
      ($("#colorcode").val() || defaultSettings.widget_color_code) :
      defaultSettings.widget_color_code;

    const icon_position = useDefaults ?
      ($("input[name='position']:checked").val() || defaultSettings.widget_position) :
      defaultSettings.widget_position;

    const icon_type = useDefaults ?
      ($("input[name='aioa_icon_type']:checked").val() || defaultSettings.widget_icon_type) :
      defaultSettings.widget_icon_type;

    const icon_size = useDefaults ?
      ($("input[name='aioa_icon_size']:checked").val() || defaultSettings.widget_icon_size) :
      defaultSettings.widget_icon_size;

    const widget_size = useDefaults ?
      ($("input[name='widget_size']:checked").val() || defaultSettings.widget_size) :
      defaultSettings.widget_size;

    const widget_icon_size_custom = useDefaults ?
      ($("#widget_icon_size_custom").val() || defaultSettings.widget_icon_size_custom) :
      defaultSettings.widget_icon_size_custom;

    if (widget_icon_size_custom < 20 && is_widget_custom_size == 1) {
      hideLoader()
      // alert('Please enter Select exact icon size minumium 20');

      Swal.fire({
        title: 'Error!',
        text: 'Please enter Select exact icon size minumium 20',
        icon: 'error',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.isConfirmed) {
          // location.reload();
        }
      });

      return;
    }

    if (widget_icon_size_custom > 150 && is_widget_custom_size == 1) {
      hideLoader()
      // alert('Please enter Select exact icon size maximum 150');
      Swal.fire({
        title: 'Error!',
        text: 'Please enter Select exact icon size maximum 150',
        icon: 'error',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.isConfirmed) {
          // location.reload();
        }
      });

      return;
    }

    // Custom positions
    const custom_position_x = $("#custom_position_x_value").val() || 0;
    const custom_position_y = $("#custom_position_y_value").val() || 0;
    const x_position_direction = $(".custom-position-controls select").eq(0).val();
    const y_position_direction = $(".custom-position-controls select").eq(1).val();

    let widget_position_right = null,
      widget_position_left = null,
      widget_position_top = null,
      widget_position_bottom = null;

    if (x_position_direction === "cust-pos-to-the-right") {
      widget_position_right = custom_position_x;
    } else if (x_position_direction === "cust-pos-to-the-left") {
      widget_position_left = custom_position_x;
    }
    if (y_position_direction === "cust-pos-to-the-lower") {
      widget_position_bottom = custom_position_y;
    } else if (y_position_direction === "cust-pos-to-the-upper") {
      widget_position_top = custom_position_y;
    }

    const url = "https://ada.skynettechnologies.us/api/widget-setting-update-platform";
    const params = {
      u: server_name,
      widget_position: icon_position,
      is_widget_custom_position: is_widget_custom_position,
      is_widget_custom_size: is_widget_custom_size,
      widget_color_code: colorcode,
      widget_icon_type: icon_type,
      widget_icon_size: icon_size,
      widget_size: widget_size,
      widget_icon_size_custom: widget_icon_size_custom,
      widget_position_right,
      widget_position_left,
      widget_position_top,
      widget_position_bottom
    };

    console.log("save settigns")
    $.ajax({
      url,
      type: "POST",
      data: params,
      dataType: "json",
      success: function() {
        hideLoader();

        if (useDefaults) {
          Swal.fire("Success!", "Settings saved successfully!", "success").then(() => {
            if (useDefaults) {
              location.reload();
              // parent.location.reload(); // reload only on user action
            }
          });
        }

      },
      error: function(xhr, status, error) {
        hideLoader();
        if (!useDefaults) {
          Swal.fire("Error!", "Something went wrong.", "error").then(() => location.reload());
        }
        console.error("AJAX error:", status, error);
      },
    });
  }

  // function to show the loader
  function showLoader() {
    $('#load').removeClass('loader-removed');
  }

  // function to hide the loader
  function hideLoader() {
    $('#load').addClass('loader-removed');
  }
</script>

<script>
  document.querySelectorAll('input[name="aioa_icon_type"]').forEach(function(radio) {
    radio.addEventListener('change', function() {
      const selectedValue = this.value;

      // Update all images with class "iconimg"
      document.querySelectorAll('.iconimg').forEach(function(img) {
        img.src = "https://www.skynettechnologies.com/sites/default/files/" + selectedValue + ".svg";

        // Remove previous value text if any
        const nextSibling = img.nextElementSibling;
        if (nextSibling && nextSibling.classList.contains('icon-value')) {
          nextSibling.remove();
        }

      });
    });
  });
</script>

</html>