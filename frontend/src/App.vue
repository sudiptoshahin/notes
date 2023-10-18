<template>
  <div id="app">
    <BaseLayout>
      <template #header>
        <div>
          <font-awesome-icon icon="fa-solid fa-user-secret" />Header
        </div>
      </template>
      <template #container>
        <div>
          container
        </div>
      </template>
      <template #footer>
        <div>
          footer
        </div>
      </template>
    </BaseLayout>
  </div>
</template>

<script>

import BaseLayout from "./components/layouts/BaseLayout.vue";
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

export default {
  name: 'App',
  components: {
    BaseLayout,
    'font-awesome-icon': FontAwesomeIcon,
  }
}
</script>

<style>
* {
  padding: 0;
  margin: 0;
}
</style>
