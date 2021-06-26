![logo](public/logo.png)

## Repo Hakkında

Bu repo GraphQL kullanarak geliştirilecek tüm projeleri tekrar tekrar yazmamak için [YasinKose](https://github.com/YasinKose/) tarafından hazırlanmıştır. 

- [Laravel 8.4](https://github.com/laravel/laravel)
- [GraphQL Laravel](https://github.com/rebing/graphql-laravel)
- [GraphQL Playground](https://github.com/mll-lab/laravel-graphql-playground)
- [JWT Auth](https://github.com/tymondesigns/jwt-auth)

Kütüphanelerini ve hazır bir auth sistemi içerir.

## Kurulum Bilgileri

Öncelikle içinizde bulunan yeni bir projeye başlama sevincinden emin olun. Daha sonra bu repoyu ister Klonlayarak isterseniz Forklayarak çoğaltın ve local cihazınıza çekin.


Composer kurulumunu başlatın
```bash
composer install
```


.env.example dosyasını .env olarak kopyalayın ve sql bağlantısını sağlayın
```bash
cp .env.example .env
```

Laravel App Key Oluşturun
```bash
php artisan key:generate
```

JWT Auth Key Oluşturun
```bash
php artisan jwt:secret
```

Migration ve seederları çalıştırın
```bash
php artisan migrate --seed
```

Bir apache server üzerine kurulu ise url üzerinden değil ise aşağıdaki şekilde port açarak işlemlerinize başlayabilirsiniz.
```bash
php artisan serve
```

## Auth İşlemi

Auth işlemleri için login mutationu içeride hazır gelmektedir. Aşağıdaki sorgu ile doğrudan access token alabilir ve giriş sağlayabilirsiniz.
```bash
mutation{
  login(
    email:"yasin@koseyasin.com"
    password:"123456789aA?"
  ){
    user_id
    token_type
    expires_in
    access_token
  }
}
```