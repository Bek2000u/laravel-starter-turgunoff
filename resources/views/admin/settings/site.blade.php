@extends('layouts.admin')

@section('title')
    Настройки сайта
@endsection

@section('main')

    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Настройки SEO</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('settings.update', 1) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="row">

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Мета описание (uz)</label>
                                    <input class="form-control" name="meta_description_uz"
                                           value="{{ $setting->meta_description_uz ?? '' }}" type="text"
                                           placeholder="Введите мета описание для сайта на узбекском">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Мета описание (ru)</label>
                                    <input class="form-control" name="meta_description_ru"
                                           value="{{ $setting->meta_description_ru ?? '' }}" type="text"
                                           placeholder="Введите мета описание для сайта на русском">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Мета описание (кир)</label>
                                    <input class="form-control" name="meta_description_kir"
                                           value="{{ $setting->meta_description_kir ?? '' }}" type="text"
                                           placeholder="Введите мета описание для сайта на английском">
                                </div>
                                <div class="col-lg-12 col-md-12 form-group mb-3">
                                    <label>Мета теги</label>
                                    <input class="form-control" name="meta_keywords" data-role="tagsinput"
                                           value="{{ $setting->meta_keywords ?? ''}}" type="text"
                                           placeholder="Введите мета теги для сайта">
                                </div>

                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Настройки Header</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('settings.update', 1) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="row">

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Заголовок 1 (uz)</label>
                                    <input class="form-control" name="header_info_title_1_uz" value="{{ $setting->header_info_title_1_uz ?? ''}}"
                                           type="tel" placeholder="Введите заголовок для nav">
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Заголовок 1 (кир)</label>
                                    <input class="form-control" name="header_info_title_1_kir" value="{{ $setting->header_info_title_1_kir ?? ''}}"
                                           type="tel" placeholder="Введите заголовок для nav">
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Заголовок 1 (ru)</label>
                                    <input class="form-control" name="header_info_title_1_ru" value="{{ $setting->header_info_title_1_ru ?? ''}}"
                                           type="tel" placeholder="Введите заголовок для nav">
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Текст 1 (uz)</label>
                                    <input class="form-control" name="header_info_title_2_uz" value="{{ $setting->header_info_title_2_uz ?? ''}}"
                                           type="tel" placeholder="Введите текст для nav">
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Текст 1 (кир)</label>
                                    <input class="form-control" name="header_info_title_2_kir" value="{{ $setting->header_info_title_2_kir ?? ''}}"
                                           type="tel" placeholder="Введите текст для nav">
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Текст 1 (ru)</label>
                                    <input class="form-control" name="header_info_title_2_ru" value="{{ $setting->header_info_title_2_ru ?? ''}}"
                                           type="tel" placeholder="Введите текст для nav">
                                </div>

                                <hr style="color: red; width: 100%;">

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Заголовок 2 (uz)</label>
                                    <input class="form-control" name="header_info_text_1_uz" value="{{ $setting->header_info_text_1_uz ?? ''}}"
                                           type="tel" placeholder="Введите заголовок для nav">
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Заголовок 2 (кир)</label>
                                    <input class="form-control" name="header_info_text_1_kir" value="{{ $setting->header_info_text_1_kir ?? ''}}"
                                           type="tel" placeholder="Введите заголовок для nav">
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Заголовок 2 (uz)</label>
                                    <input class="form-control" name="header_info_text_1_ru" value="{{ $setting->header_info_text_1_ru ?? ''}}"
                                           type="tel" placeholder="Введите заголовок для nav">
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Текст 2 (кир)</label>
                                    <input class="form-control" name="header_info_text_2_uz" value="{{ $setting->header_info_text_2_uz ?? ''}}"
                                           type="tel" placeholder="Введите текст для nav">
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Текст 2 (кир)</label>
                                    <input class="form-control" name="header_info_text_2_kir" value="{{ $setting->header_info_text_2_kir ?? ''}}"
                                           type="tel" placeholder="Введите текст для nav">
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Текст 2 (ru)</label>
                                    <input class="form-control" name="header_info_text_2_ru" value="{{ $setting->header_info_text_2_ru ?? ''}}"
                                           type="tel" placeholder="Введите текст для nav">
                                </div>

                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Настройки сайта</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('settings.update', 1) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="row">

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Введите Email</label>
                                    <input class="form-control" name="email" value="{{ $setting->email ?? '' }}"
                                           type="email" placeholder="Введите email">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Номер 1</label>
                                    <input class="form-control" name="phone_1" value="{{ $setting->phone_1 ?? ''}}"
                                           type="tel" placeholder="Введите 1-ый номер телефона">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Номер 2</label>
                                    <input class="form-control" name="phone_2" value="{{ $setting->phone_2 ?? ''}}"
                                           type="tel" placeholder="Введите 2-ой номер телефона">
                                </div>

                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Настройки Социальных сетей</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('settings.update', 1) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Instagram</label>
                                    <input class="form-control" name="instagram" value="{{ $setting->instagram ?? '' }}"
                                           type="text" placeholder="Введите Instagram аккаунт">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Telegram</label>
                                    <input class="form-control" name="telegram" value="{{ $setting->telegram ?? '' }}"
                                           type="text" placeholder="Введите Telegram аккаунт">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Facebook</label>
                                    <input class="form-control" name="facebook" value="{{ $setting->facebook ?? '' }}"
                                           type="text" placeholder="Введите Facebook аккаунт">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>YouTube</label>
                                    <input class="form-control" name="youtube" value="{{ $setting->youtube ?? '' }}"
                                           type="text" placeholder="Введите YouTube аккаунт">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Tiktok</label>
                                    <input class="form-control" name="tiktok" value="{{ $setting->tiktok ?? '' }}"
                                           type="text" placeholder="Введите TikTok аккаунт">
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Whatsapp</label>
                                    <input class="form-control" name="whatsapp" value="{{ $setting->whatsapp ?? '' }}"
                                           type="text" placeholder="Введите Watsapp аккаунт">
                                </div>

                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Настройки Footer</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('settings.update', 1) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="row">

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Введите адрес (uz)</label>
                                    <input class="form-control" name="address_uz"
                                           value="{{ $setting->address_uz ?? '' }}" type="text"
                                           placeholder="Введите адрес на узбекском">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Введите адрес (кир)</label>
                                    <input class="form-control" name="address_kir"
                                           value="{{ $setting->address_kir ?? '' }}" type="text"
                                           placeholder="Введите адрес на кирилица">
                                </div>
                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Введите адрес (ru)</label>
                                    <input class="form-control" name="address_ru"
                                           value="{{ $setting->address_ru ?? '' }}" type="text"
                                           placeholder="Введите адрес на русском">
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Введите инфо о фирме (uz)</label>
                                    <textarea class="form-control" name="footer_info_uz" cols="30" rows="10"
                                              placeholder="Введите инфо на узбекском">{{ $setting->footer_info_uz ?? '' }}</textarea>
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Введите инфо о фирме (кир)</label>
                                    <textarea class="form-control" name="footer_info_kir" cols="30" rows="10"
                                              placeholder="Введите инфо на кирилица">{{ $setting->footer_info_kir ?? '' }}</textarea>
                                </div>

                                <div class="col-lg-4 col-md-6 form-group mb-3">
                                    <label>Введите инфо о фирме (ru)</label>
                                    <textarea class="form-control" name="footer_info_ru" cols="30" rows="10"
                                              placeholder="Введите инфо на русском">{{ $setting->footer_info_ru ?? '' }}</textarea>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
