<template>
  <div>
    <h2>Contact Us</h2>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      <b-form-group id="exampleInputGroup1"
                    label="Email address:"
                    label-for="exampleInput1"
                    description="We'll never share your email with anyone else.">
        <b-form-input id="exampleInput1"
                      type="email"
                      v-model="form.email"
                      required
                      placeholder="Enter email">
        </b-form-input>
      </b-form-group>
      <b-form-group id="exampleInputGroup2"
                    label="Your Name:"
                    label-for="exampleInput2">
        <b-form-input id="exampleInput2"
                      type="text"
                      v-model="form.name"
                      required
                      placeholder="Enter name">
        </b-form-input>
      </b-form-group>
      <b-form-group id="exampleInputGroup3"
                    label="Telephone:"
                    label-for="exampleInput3">
        <b-form-input id="exampleInput3"
                      type="text"
                      v-model="form.phone"
                      required
                      placeholder="Enter Telephone Number">
        </b-form-input>
      </b-form-group>
      <b-form-group label="Preferred Method of Contact">
        <b-form-radio-group v-model="form.contactSelected"
                            :options="contactOptions"
                            name="radioInline">
        </b-form-radio-group>
      </b-form-group>
      <transition 
                name="custom-classes-transition" 
                mode="out-in"
                enter-active-class="animated fadeInDown"
                leave-active-class="animated fadeOutUp"
      >
        <b-form-group 
                      v-if="form.contactSelected == 'phone'"
                      id="exampleInputGroup3"
                      label="Best Time to Call:"
                      label-for="exampleInput3">
          <b-form-select id="exampleInput3"
                        :options="timeOptions"
                        v-model="form.time">
          </b-form-select>
        </b-form-group>
      </transition>
      <b-form-group>
        <b-form-textarea id="textarea1"
                        v-model="form.questionsComments"
                        placeholder="Questions/Comments"
                        :rows="3"
                        :max-rows="6">
        </b-form-textarea>
      </b-form-group>
      <b-button type="submit" variant="primary">Submit</b-button>
      <b-button type="reset" variant="danger">Reset</b-button>
    </b-form>
  </div>
</template>

<script>
export default {
  data () {
    return {
      form: {
        email: '',
        name: '',
        phone: '',
        contactSelected: '',
        time: 'anytime',
        questionsComments: '',
      },
      contactOptions: [
        {text: 'Email', value: 'email'},
        {text: 'Phone', value: 'phone'}
      ],
      timeOptions: [
        {text: 'Anytime', value: 'anytime'},
        {text: 'Weekday Mornings', value: 'weekday-mornings'},
        {text: 'Weekday Afternoons', value: 'weekday-afternoons'},
        {text: 'Weekday After 5pm', value: 'weekday-evenings'},
        {text: 'Weekend Mornings', value: 'weekend-mornings'},
        {text: 'Weekend Afternoons', value: 'weekend-afternoons'},
        {text: 'Weekend After 5pm', value: 'weekend-evenings'},
      ],
      show: true
    }
  },
  methods: {
    onSubmit (evt) {
      evt.preventDefault();
      alert(JSON.stringify(this.form));
    },
    onReset (evt) {
      evt.preventDefault();
      /* Reset our form values */
      this.form.email = '';
      this.form.name = '';
      this.form.food = null;
      this.form.checked = [];
      /* Trick to reset/clear native browser form validation state */
      this.show = false;
      this.$nextTick(() => { this.show = true });
    }
  }
}
</script>