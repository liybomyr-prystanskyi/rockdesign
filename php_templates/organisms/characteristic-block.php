  <section class="characteristic-block">
    <div class="container">
      <div class="characteristic-block__main">
        <ul class="nav nav-tabs characteristic-block__main__my-nav-tabs" id="myTab" role="tablist">

          <li class="characteristic-block__main__my-nav-tabs__item nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">&#x41E;&#x43F;&#x438;&#x441;</a>
          </li>

          <li class="characteristic-block__main__my-nav-tabs__item nav-item">
            <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">&#x425;&#x430;&#x440;&#x430;&#x43A;&#x442;&#x435;&#x440;&#x438;&#x441;&#x442;&#x438;&#x43A;&#x438;</a>
          </li>

        </ul>
        <div class="characteristic-block__main__subinfo">
          <p>&#x41D;&#x430;&#x448;&#x430; &#x43A;&#x43E;&#x43C;&#x43F;&#x430;&#x43D;&#x456;&#x44F; &#x43D;&#x430;&#x434;&#x430;&#x454; &#x43C;&#x43E;&#x436;&#x43B;&#x438;&#x432;&#x456;&#x441;&#x442;&#x44C; &#x412;&#x430;&#x43C; &#x437;&#x43C;&#x456;&#x43D;&#x44E;&#x432;&#x430;&#x442;&#x438; &#x444;&#x43E;&#x440;&#x43C;&#x438;, &#x440;&#x43E;&#x437;&#x43C;&#x456;&#x440;&#x438;, &#x43E;&#x431;&#x440;&#x456;&#x437;&#x43A;&#x443;,
            &#x43A;&#x43E;&#x43B;&#x44C;&#x43E;&#x440;&#x438; &#x442;&#x430; &#x456;&#x43D;&#x448;&#x435;. &#x432; &#x441;&#x432;&#x43E;&#x457;&#x445; &#x43C;&#x43E;&#x434;&#x435;&#x43B;&#x44F;&#x445; &#x43F;&#x456;&#x434; &#x412;&#x430;&#x448; &#x456;&#x43D;&#x442;&#x435;&#x440;&apos;&#x454;&#x440;
          </p>
        </div>
        <div class="tab-content" id="tab-content">

          <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="characteristic-block__main__anagraph">
              <?php include get_template_directory()."php_templates/molecules/anagraph-content.php"; ?>
            </div>
          </div>

          <div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="characteristic-block__main__table">
              <div class="row m-0">
                <?php include get_template_directory()."php_templates/molecules/characteristic-table.php"; ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
