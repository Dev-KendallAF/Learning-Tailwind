        //Visual
        const darkModeButton = document.getElementById("darkModeToggle");
        const darkModeIndicator = document.getElementById("darkModeIndicator");
        const icon = document.getElementById("iconDarkMode");
        
        function IconToggle()
        { 
            darkModeButton.classList.toggle("bg-gray-300");
            darkModeButton.classList.toggle("bg-cyan-300");
            darkModeIndicator.classList.toggle("bg-white");
            darkModeIndicator.classList.toggle("bg-black");
            darkModeIndicator.classList.toggle("text-black");
            darkModeIndicator.classList.toggle("text-white");
            icon.classList.toggle("fa-moon");
            icon.classList.toggle("fa-sun");
            document.body.classList.toggle('lightMode')
            document.body.classList.toggle('darkMode')

        }


        //Theme Vars
        const userTheme = localStorage.getItem("theme")
        const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

        function ThemeSwitch()
        {
            console.log('cambiando tema')
            if(document.documentElement.classList.contains("dark"))
            {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("theme","light")
            darkModeIndicator.style.transform = "translateX(0)";

                IconToggle();
                return;
            }

            document.documentElement.classList.add("dark")
            localStorage.setItem("theme","dark")
            darkModeIndicator.style.transform = "translateX(100%)";
            IconToggle();
        }

        function ThemeCheck()
        {
            if(userTheme==="dark" || (!userTheme && systemTheme))
            {
                console.log('estas dentro')
                document.documentElement.classList.add("dark")
                darkModeIndicator.style.transform = "translateX(100%)";
                document.body.classList.add('darkMode')
                IconToggle();
                return;
            }
            document.body.classList.add('lightMode')
            darkModeIndicator.style.transform = "translateX(0)";
        }

    // Initialize dark mode based on user preference
    ThemeCheck();

    // Add click event listener to the button
    document.getElementById("darkModeToggle").addEventListener("click", ThemeSwitch);