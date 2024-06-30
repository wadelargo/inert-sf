<script>

</script>

<template>

<div id="main-wrapper">
    <div id="sidebar" class="min-w-[300px] bg-white-900 flex flex-col items-center">
      <div id="profile" style="width: 90%;">
        <img src="https://scontent.fceb1-4.fna.fbcdn.net/v/t39.30808-6/439246560_346041438483142_6738095105484405457_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeH5ZBu5iwxjjnFez6afcYMzUowQfQwqEwdSjBB9DCoTB_VDzRiFheruZPoZYBow0kF2PqdSkGKzrrSs63OVhtUG&_nc_ohc=0ucA5M64u-4Q7kNvgEV0jyP&_nc_ht=scontent.fceb1-4.fna&oh=00_AfBs8DUzQYc38aI9xH03Hm76kjmCmFOF74M1HF1IldkKuA&oe=6638BE0F" alt="My Picture" class="profile-picture" />
      </div>

      <div class="description" style="text-align: center;">
        <h2 style="font-size: 24px; margin-bottom: 10px;">John Meward (he/him)</h2>
        <p style="font-size: 18px; margin-bottom: 20px;">Web Developer</p>

        <!-- Email Me Button -->
        <button class="contact-button" style="font-size: 15px;">EMAIL ME</button>

        <iframe width="315" height="560" src="https://www.youtube.com/embed/1Lk9VvWLdm0" title="&quot;Sweet But Psycho&quot;..." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
     </div>



    </div>
    <div id="content" class="flex flex-col flex-1">
      <div class="flex-1 bg-blue-200">
        <slot/>
      </div>
      <!-- <footer class="py-4 text-center text-gray-600">
        Copyright &copy; 2024. Christine Software, Inc.
      </footer> -->
    </div>
</div>
</template>



<style scoped>
#main-wrapper {
  min-height: 100vh;
  display: flex;
}

#profile img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.portfolio-container {
  display: block;
  justify-content: space-between;
  margin: 20px;
}

.profile-container {
  flex: 1;
}

.profile-picture {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.description {
  margin-top: 50px;
  text-align: center;
}


.contact-button {
  margin-top: 90px;
  padding: 10px 70px;
  background-color: #000000;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

#sidebar {
  min-width: 9vh;
  max-width: 90vh;
}

#content {
  flex: 1;
}
</style>
