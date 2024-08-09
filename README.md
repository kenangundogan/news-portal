# Haber Portalı

Bu proje, haber içeriklerini yönetmek, görüntülemek ve kullanıcı etkileşimi sağlamak amacıyla geliştirilmiş bir haber portalıdır.

## İçindekiler

- [Özellikler](#özellikler)
- [Kurulum](#kurulum)
- [Kullanım](#kullanım)
- [Lisans](#lisans)
- [Proje Sahipliği](#proje-sahipliği)

## Özellikler

- Haber kategorileri oluşturma ve yönetme
- Haber içerikleri ekleme, düzenleme ve silme
- Kullanıcı kaydı ve kimlik doğrulama
- Haber arama ve filtreleme
- Yönetim paneli
- SEO dostu URL yapısı

## Kurulum

### Gereksinimler

- PHP >= 8.2
- MySQL
- Composer
- Node.js ve npm

### MySQL Kurulumu

MySQL'i kurmak için aşağıdaki adımları izleyebilirsiniz:

1. **MySQL İndirme ve Kurulum:**
    [MySQL resmi web sitesinden](https://dev.mysql.com/downloads/mysql/) işletim sisteminize uygun versiyonu indirip kurun.

2. **Kurulum Sırasında Bir Root Kullanıcı Şifresi Belirleyin:** 
    Kurulum işlemi sırasında MySQL root kullanıcı şifresini belirleyin ve hatırladığınızdan emin olun.

3. **MySQL Servisini Başlatın:**
    Kurulum tamamlandıktan sonra MySQL servisini başlatın. İşletim sisteminize bağlı olarak servis başlatma komutları farklılık gösterebilir:

    - **Windows:**
      ```bash
      net start mysql
      ```

    - **Linux:**
      ```bash
      sudo service mysql start
      ```

    - **MacOS:**
      ```bash
      brew services start mysql
      ```

4. **Veritabanı Oluşturun:**
    MySQL komut satırına veya bir MySQL yönetim aracı (örneğin, phpMyAdmin) kullanarak giriş yapın ve proje için bir veritabanı oluşturun:
    ```sql
    CREATE DATABASE newsportal;
    ```

### Node.js ve NPM Kurulumu

Node.js ve npm'i kurmak için aşağıdaki adımları izleyebilirsiniz:

1. **Node.js İndirme ve Kurulum:**
    [Node.js resmi web sitesinden](https://nodejs.org/) işletim sisteminize uygun versiyonu indirip kurun. Kurulum işlemi sırasında npm de otomatik olarak yüklenecektir.

2. **Kurulumu Doğrulama:**
    Terminal veya komut istemcisinde aşağıdaki komutları çalıştırarak kurulumun başarılı olduğunu doğrulayın:
    ```bash
    node -v
    npm -v
    ```

### Composer Kurulumu

Composer'ı kurmak için aşağıdaki adımları izleyebilirsiniz:

1. **Composer İndirme ve Kurulum:**
    [Composer resmi web sitesinden](https://getcomposer.org/) işletim sisteminize uygun kurulum talimatlarını takip edin.

2. **Kurulumu Doğrulama:**
    Terminal veya komut istemcisinde aşağıdaki komutu çalıştırarak kurulumun başarılı olduğunu doğrulayın:
    ```bash
    composer -v
    ```

### Adım Adım Kurulum

1. **Depoyu Klonlayın:**
    ```bash
    git clone https://github.com/kullaniciadi/haber-portali.git
    cd haber-portali
    ```

2. **Composer Bağımlılıklarını Yükleyin:**
    ```bash
    composer install
    ```

3. **.env Dosyasını Oluşturun:**
    ```bash
    cp .env.example .env
    ```

4. **Ortam Değişkenlerini Ayarlayın:**
    `.env` dosyasını açın ve veritabanı bilgilerinizi girin.

5. **Env Anahtarı Oluşturun:**
    ```bash
    php artisan key:generate
    ```

6. **Veritabanı Migrasyonlarını Çalıştırın:**
    ```bash
    php artisan migrate --seed
    ```

7. **Uygulamayı Başlatın:**
    ```bash
    php artisan serve
    ```

8. **NPM Bağımlılıklarını Yükleyin:**
    ```bash
    npm install
    ```

9. **NPM Geliştirme Sunucusunu Başlatın:**
    ```bash
    npm run dev
    ```

### Kullanım

- **Ana Sayfa:** Uygulamayı başlattıktan sonra [http://localhost:8000](http://localhost:8000) adresine gidin.
- **Yönetim Paneli:** Yönetici yetkileri ile giriş yaptıktan sonra /cms yoluna gidin.

### Lisans

Bu proje MIT Lisansı ile lisanslanmıştır. Daha fazla bilgi için `LICENSE` dosyasını inceleyebilirsiniz.

### Proje Sahipliği

Bu proje Kenan Gündoğan tarafından geliştirilmiştir.
