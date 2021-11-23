<?php
/* @var bool $isPost */
/* @var array $errors */

?>
<h2 class="visually-hidden">Форма добавления фото</h2>
<form class="adding-post__form form" action="add.php" method="post"
      enctype="multipart/form-data">
    <div class="form__text-inputs-wrapper">
        <div class="form__text-inputs">
            <div class="adding-post__input-wrapper form__input-wrapper">
                <label class="adding-post__label form__label" for="photo-heading">Заголовок
                    <span class="form__input-required">*</span></label>
                <div class="form__input-section <?php
                if ($isPost  && !empty($errors['photo-heading'])): print 'form__input-section--error';
                endif; ?>">
                    <input class="adding-post__input form__input" id="photo-heading" type="text"
                           name="photo-heading" placeholder="Введите заголовок"
                           value="<?= getPostVal('photo-heading'); ?>">
                    <button class="form__error-button button" type="button">!<span
                            class="visually-hidden">Информация об ошибке</span></button>
                    <div class="form__error-text">
                        <h3 class="form__error-title">Заголовок сообщения</h3>
                        <p class="form__error-desc"><?php
                            print $errors['photo-heading'] ?></p>
                    </div>
                </div>
            </div>
            <div class="adding-post__input-wrapper form__input-wrapper">
                <label class="adding-post__label form__label" for="photo-url">Ссылка из
                    интернета</label>
                <div class="form__input-section <?php
                if ($isPost && !empty($errors['photo-url'])): print 'form__input-section--error';
                endif; ?>">
                    <input class="adding-post__input form__input" id="photo-url" type="text"
                           name="photo-url" placeholder="Введите ссылку"
                           value="<?= getPostVal('photo-url'); ?>">
                    <button class="form__error-button button" type="button">!<span
                            class="visually-hidden">Информация об ошибке</span></button>
                    <div class="form__error-text">
                        <h3 class="form__error-title">Заголовок сообщения</h3>
                        <p class="form__error-desc"><?php
                            print $errors['photo-url'] ?></p>
                    </div>
                </div>
            </div>
            <div class="adding-post__input-wrapper form__input-wrapper">
                <label class="adding-post__label form__label" for="photo-tags">Теги</label>
                <div class="form__input-section <?php
                if ($isPost && !empty($errors['photo-tags'])): print 'form__input-section--error';
                endif; ?>">
                    <input class="adding-post__input form__input" id="photo-tags" type="text"
                           name="photo-tags" placeholder="Введите теги"
                           value="<?= getPostVal('photo-tags'); ?>">
                    <button class="form__error-button button" type="button">!<span
                            class="visually-hidden">Информация об ошибке</span></button>
                    <div class="form__error-text">
                        <h3 class="form__error-title">Заголовок сообщения</h3>
                        <p class="form__error-desc"><?php
                            print $errors['photo-tags'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if ($isPost && count($errors) > 0): ?>
            <div class="form__invalid-block">
                <b class="form__invalid-slogan">Пожалуйста, исправьте следующие ошибки:</b>
                <ul class="form__invalid-list">
                    <?php
                    if (!empty($errors['photo-heading'])): ?>
                        <li class="form__invalid-item">Заголовок. <?php
                            print ($errors['photo-heading']) ?>
                        </li>
                    <?php
                    endif; ?>
                    <?php
                    if (!empty($errors['photo-url'])): ?>
                        <li class="form__invalid-item">Ссылка из интернета. <?php
                            print ($errors['photo-url']) ?> Или прикрепите файл изображения
                        </li>
                    <?php
                    endif; ?>
                    <?php
                    if (!empty($errors['photo-tags'])): ?>
                        <li class="form__invalid-item">Теги. <?php
                            print ($errors['photo-tags']) ?>
                        </li>
                    <?php
                    endif; ?>
                    <?php
                    if (!empty($errors['Server_error'])): ?>
                        <li class="form__invalid-item">Ошибка. <?php
                            print ($errors['Server_error']) ?>
                        </li>
                    <?php
                    endif; ?>
                </ul>
            </div>
        <?php
        endif ?>
    </div>
    <div
        class="adding-post__input-file-container form__input-container form__input-container--file">
        <div class="adding-post__input-file-wrapper form__input-file-wrapper">
            <div
                class="adding-post__file-zone adding-post__file-zone--photo form__file-zone dropzone">
                <input class="adding-post__input-file form__input-file" id="userpic-file-photo"
                       type="file" name="userpic-file-photo" title="">
                <div class="form__file-zone-text">
                    <span>Перетащите фото сюда</span>
                </div>
            </div>
            <button
                class="adding-post__input-file-button form__input-file-button form__input-file-button--photo button"
                type="button">
                <span>Выбрать фото</span>
                <svg class="adding-post__attach-icon form__attach-icon" width="10" height="20">
                    <use xlink:href="#icon-attach"></use>
                </svg>
            </button>
        </div>
        <div class="adding-post__file adding-post__file--photo form__file dropzone-previews">

        </div>
    </div>
    <div class="adding-post__buttons">
        <button class="adding-post__submit button button--main" type="submit">Опубликовать
        </button>
        <a class="adding-post__close" href="#">Закрыть</a>
    </div>
</form>
