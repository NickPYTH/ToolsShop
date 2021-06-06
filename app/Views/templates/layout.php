<!DOCTYPE html>
<head>
    <title>Аренда инструмента</title>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
    <link rel="stylesheet" href="/styles.css">

    <script src="https://kit.fontawesome.com/6e9b058a28.js"></script>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
</head>
<body id="root">
<div class="" style="margin-top:15px; margin-bottom: 15px;">
  <header class="navbar">
    <section class="navbar-section">
      <a href="<?= base_url()?>" class="navbar-brand mr-2">Аренда инструмента</a>
        <?php if (! $ionAuth->loggedIn()): ?>
            <a href="<?= base_url()?>/auth/login" class="btn btn-link">Войти</a>
        <?php endif ?>

        <?php if ($ionAuth->loggedIn()): ?>
            <?php if ($ionAuth->isAdmin()): ?>
                <a href="<?= base_url()?>/Clients/all" class="btn btn-link">Клиенты</a>
                <a href="<?= base_url()?>/Pages/add" class="btn btn-link">Добавить товар</a>
            <?php else: ?>
        <?php endif ?>

        <?php if (!$ionAuth->isAdmin()): ?>
        <div class="popover popover-bottom">
        <button id="cart" class="btn btn-link"><a id="cart_id" class="badge" data-badge="0">
          Корзина<div id="max_count_items" style="display:none;">0<div>
        </a>
        </button>
        <div class="popover-container">
          <div class="card">
            <div class="card-header">
              Корзина
            </div>
            <div id="cart_list" class="card-body"></div>
            <div class="card-footer">
            <button class="btn" onclick="remove_all_item(this);">Очистить корзину</button>
            <button class="btn" onclick="payment_modal_open(this);">Оплатить</button>

            </div>
          </div>
        </div>
      </div><?php endif ?>
        <a href="<?= base_url()?>/auth/logout" class="btn btn-link">Выйти</a>
      <?php endif ?>
    </section>
    <section class="navbar-section">
      <div class="input-group input-inline">
      <?php if ( $ionAuth->loggedIn()): ?>
        <?= form_open('Pages/view',['style' => 'display: flex']); ?>
          <input class="form-input" type="text" placeholder="Что ищем?" name="search" value="<?= $search; ?>">
          <button class="btn btn-primary input-group-btn" type="submit">Поиск</button>
        </form>
        <?php endif ?>
      </div>
    </section>
  </header>
</div>

<div class="modal" id="payment_modal">
  <a href="#close" class="modal-overlay" aria-label="Close"></a>
  <div class="modal-container">
    <div class="modal-header">
      <a href="#close" class="btn btn-clear float-right" aria-label="Close" onclick="payment_modal_close();"></a>
      <div class="modal-title h5">
        Корзина
      </div>
    </div>
    <div class="modal-body">
      <div class="content">
      <?= form_open('Payment/payment'); ?>
      <input name="items_counter" id="items_counter" style="display:none;" />
      <input name="email" style="display:none;" value="<?= $ionAuth->user()->row()->id; ?>"/>
       <div id="payment_cart"></div>
      </div>
    </div>
    <div class="modal-footer">
    <button class="btn" type="submit">Купить</button>
    </form>
     <a class="btn" onclick="payment_modal_close();">Отменить</a>
    </div>
  </div>
</div>

    

    <main role="main">
        <?= $this->renderSection('content') ?>
    </main>
    <?= $this->renderSection('footer') ?>
    <script src="/payment_script.js">
    </script>
    <script src="/add_to_cart.js">
    </script>
</body>
</html>