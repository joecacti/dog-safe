<template>
  <div>
    <h1 class="title">Contact Us</h1>
    <p>Please contact us to request more information or a free estimate - or just to let us know about your experience with DogSafe.</p>
    <p>We’d love to hear from you!</p>

    <p>Phone: <a href="tel:7406065552">740-606-5552</a></p>
    <p>Email: <a href="mailto:info@godogsafe.com">info@godogsafe.com</a></p>

    <hr />
    <form @submit.prevent="submit">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" v-model="fields.name" />
            <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
        </div>
	
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" v-model="fields.email" />
            <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
        </div>
	
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" v-model="fields.message"></textarea>
            <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Send message</button>

        <div v-if="success" class="alert alert-success mt-3">
            Message sent!
        </div>
    </form>
  </div>
</template>

<script>
import FormMixin from '../FormMixin';

export default {
  mixins: [ FormMixin ],

  data() {
    return {
      'action': '/submit',
    }
  }
}
</script>