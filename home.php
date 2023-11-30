<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
      <link rel="stylesheet" href="styles.css">
      <link rel="tailwindstyle" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

</head>
<style>
    /* a
    {
        text-decoration:none; 
        background-color:lime;
    }
    a:hover
    {
        background: dark green;
    } */
    @keyframes wiggle {
            0% { transform: rotate(0deg); }
            25% { transform: rotate(5deg); }
            50% { transform: rotate(0deg); }
            75% { transform: rotate(-5deg); }
            100% { transform: rotate(0deg); }
        }

        .animate-wiggle {
            animation: wiggle 1s ease-in-out infinite;
        }
</style>
<body>
    <h1>Welcome Bookworm!</h1>
    <a href="book_manager.php">Book Manager</a>
    <br>
    <p style="box-shadow: 1px 1px 6px black; border: 1px solid black; padding: 5px;">
Welcome to BookWorm, your digital gateway to a world of books! 📚 Dive into an immersive interface connecting you with a 
vast database of literary treasures. Explore, discover, and manage your reading journey effortlessly. 
From adding new gems to updating your collection, BookWorm is your companion in the realm of literature. 
Let the adventure begin as you turn the virtual pages of your personalized book haven with BookWorm! 🌐📖 
#BookWorm #ReadingAdventure</p>
    <img src="bookWorm.png" alt="Book Worm" class="w-32 h-32 mt-4 animate-wiggle">
</body>
</html>