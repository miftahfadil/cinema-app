<!DOCTYPE html>
<html lang="en" data-theme="cinema">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" />
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="hero relative overflow-hidden bg-base-200 min-h-screen">
        <div class="crcl crcl-accent"></div>
        <div class="crcl crcl-secondary"></div>
        <div class="crcl crcl-primary"></div>
        <div class="hero-content text-center text-base-100">
            <div class="md:max-w-4xl tracking-wide">
                <p class="text-xl">WE ARE LOREM IPSUM</p>
                <h1 class="text-3xl md:text-6xl/16 montserrat-h1 py-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit, quod tempora odit quas. Architecto
                </h1>
                <div class="flex justify-center items-center">
                    <div class="get-started">
                        <a href="#section-login" class="text-base-content">Explore our collections</a>
                        <button class="btn btn-neutral">Get Started!</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section>
        <div class="section-login" id="section-login">
            <div class="card w-96 shadow shadow-base-100">
                <div class="card-body">
                    <h2 class="card-title text-neutral-content">Sign In</h2>
                    <p class="text-neutral-content">Sign to explore</p>
                    <form action="" class="*:mb-2">
                        <label class="input w-full">
                            <i class="hgi hgi-stroke hgi-user-circle-02"></i>
                            <input type="text" class="grow" placeholder="username" />
                        </label>
                        <label class="input w-full">
                            <i class="hgi hgi-stroke hgi-square-lock-02"></i>
                            <input type="password" class="grow" placeholder="password" />
                        </label>
                        <button class="btn btn-primary w-full" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>