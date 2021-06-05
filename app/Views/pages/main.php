<?= $this->extend('templates/layout') ?>
<?= $this->section('content') ?>
    <?php if (! $ionAuth->loggedIn()): ?>
        <div style="margin-bottom: 15px;" class="hero bg-gray">
            <div class="hero-body">
                <h1>Лучший инструмент, лучшим строителям!</h1>
                <p>Войдите в личный кабинет, чтобы оформит заказ</p>
            </div>
        </div>
        
        <div class="container grid-lg">
            <div class="columns">
                    <div class="container">
                    <div class="columns">
                    <?php if (!empty($tools) && is_array($tools)) : ?>
                    <?php foreach ($tools as $item): ?>
                    <div style="margin-bottom:15px;" class="column col-4">
                        <div style="" class="card">
                        <div class="card-image">
                            <img class="img-responsive" src="<?= esc($item['pictureUrl']); ?>">
                        </div>
                        <div class="card-header">
                            <h2 class="card-title"><?= esc($item['Name']); ?></h2>
                            <p class="card-meta"><?= esc($item['Price']); ?> ₽</p>
                        </div>
                        <div class="card-body">
                            <p><?= esc($item['Description']); ?></p>
                        </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p style="margin-top:15px;">В данный момент нет доступного инструмента</p>
                <?php endif ?>
            </div>
        </div> 
        <div class="container">
            <div class="columns text-center">
                <div style="margin-bottom:15px;" class="column col-12">
                    <?= $pager->links('group1') ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="columns">
                <div style="margin-bottom:15px;" class="column col-12 center">
                <?= form_open('Pages/view', ['class' => 'text-center']); ?>
                    <label class="input-group-text" for="inputGroupSelect01">Колличество на странице</label>
                    <div class="form-group">
                    <select class="form-select" name="per_page">
                    <option value="2" <?php if($per_page == '2') echo("selected"); ?>>2</option>
                        <option value="5"  <?php if($per_page == '5') echo("selected"); ?>>5</option>
                        <option value="10" <?php if($per_page == '10') echo("selected"); ?>>10</option>
                        <option value="20" <?php if($per_page == '20') echo("selected"); ?>>20</option>
                    </select>
                    </div>
                    <button style="margin-bottom: 15px;" type="submit" class="btn btn-primary text-center">Применить</button>      
                </form>
                </div>
            </div>
        </div>
        
        
    <?php else: ?>
        <div style="margin-bottom: 15px;" class="hero bg-gray">
            <div class="hero-body">
                <h1>Лучший инструмент, лучшим строителям!</h1>
                <p>Войдите в личный кабинет, чтобы оформит заказ</p>
            </div>
        </div>
        <div class="container grid-lg">
            <div class="columns">
        
                    <div class="container">
                    <div class="columns">
                    <?php if (!empty($tools) && is_array($tools)) : ?>
                    <?php foreach ($tools as $item): ?>
                    <div style="margin-bottom:15px;" class="column col-4">
                        <div class="card">
                        <div class="card-image">
                            <img class="img-responsive" src="<?= esc($item['pictureUrl']); ?>">
                        </div>
                        <div class="card-header">
                            <h2 class="card-title"><?= esc($item['Name']); ?></h2>
                            <p class="card-meta"><?= esc($item['Price']); ?> ₽</p>
                        </div>
                        <div class="card-body text-center">
                            <p><?= esc($item['Description']); ?></p>
                            <button style="margin-bottom: 15px;" type="submit" class="btn btn-primary" onclick="addItem(this, '<?= esc($item['Name']); ?>');">
                                Добавить в корзину
                            </button>      
                
                        </div>
                        
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p style="margin-top:15px;">В данный момент нет доступного инструмента</p>
                <?php endif ?>
            </div>
        </div> 
        <div class="container">
            <div class="columns text-center">
                <div style="margin-bottom:15px;" class="column col-12">
                    <?= $pager->links('group1') ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="columns">
                <div style="margin-bottom:15px;" class="column col-12 center">
                <?= form_open('Pages/view', ['class' => 'text-center']); ?>
                    <label class="input-group-text" for="inputGroupSelect01">Колличество на странице</label>
                    <div class="form-group">
                    <select class="form-select" name="per_page">
                    <option value="2" <?php if($per_page == '2') echo("selected"); ?>>2</option>
                        <option value="5"  <?php if($per_page == '5') echo("selected"); ?>>5</option>
                        <option value="10" <?php if($per_page == '10') echo("selected"); ?>>10</option>
                        <option value="20" <?php if($per_page == '20') echo("selected"); ?>>20</option>
                    </select>
                    </div>
                    <button style="margin-bottom: 15px;" type="submit" class="btn btn-primary text-center">
                        Применить
                    </button>      
                </form>
                </div>
            </div>
        </div>
    <?php endif ?>     
              
    
<?= $this->endSection() ?>
