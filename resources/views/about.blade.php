
<x-layout>
    <x-slot:title>About</x-slot>
    <!-- Post -->
    <article class="bg-gray-50 dark:bg-gray-900 pb-12 sm:pb-16 lg:pb-24">
        <!-- Post Header -->
        <header>
          <!-- Image -->
          <div class="aspect-h-2 aspect-w-3 w-full sm:aspect-h-1">
            <img
              src="images\about11.jpg"
              class="object-cover object-center"
            />
          </div>

          <!-- Post Header Content -->
          <div class="px-5 lg:px-0">
            <!-- Article Information -->
            <div
              class="mx-auto mb-8 max-w-prose border-b border-gray-300/70 pb-8 pt-10 text-lg sm:pt-16"
            >
              <a
                href="{{ url('/projects/technology')}}"
                class="transition-color relative text-sm font-medium uppercase tracking-widest text-red-700 dark:text-red-300 duration-300 ease-in-out hover:text-red-600 dark:hover:text-red-200"
                >{{ __('E-Commerce') }}</a
              >

              <h2
                class="mt-3.5 text-4xl font-medium tracking-normal text-gray-900 decoration-red-300 decoration-3 transition duration-300 ease-in-out group-hover:underline sm:mt-5 sm:text-5xl sm:leading-tight md:tracking-tight lg:text-6xl"
              >
              "Exploring E-Commerce: Transforming How We Shop"
              </h2>

              <div>
                <p class="mt-4 text-base leading-loose text-gray-600">
                E-commerce, or electronic commerce, refers to the buying and selling of goods and services over the internet. It has transformed the retail landscape, enabling businesses to reach customers globally and providing consumers with convenience and a vast selection of products.
                </p>
              </div>

              <!-- Author meta -->
              <div class="mt-6 flex items-center sm:mt-8">
                <a href="{{ url('/about') }}" class="mr-3 flex-shrink-0">
                  <div class="relative">
                    <img
                      class="h-8 w-8 rounded-xl object-cover object-center sm:h-9 sm:w-9"
                      src="images/author3.jpeg"
                      alt=""
                    />
                    <span
                      class="absolute inset-0 rounded-xl shadow-inner"
                      aria-hidden="true"
                    ></span>
                  </div>
                </a>

                <div class="flex items-center text-sm lg:text-[15px]">
                  <span class="hidden text-gray-500 sm:inline-block"
                    >By&nbsp;</span
                  >
                  <a
                    class="font-medium text-gray-700 hover:underline"
                    href="{{ url('/about') }}"
                    >{{ __(config('info.sitename')) }}</a
                  >

                  <x-icons.calendar />
                  <span class="ml-1 text-gray-500">Nov 2, 2020</span>

                  <span class="hidden items-center sm:flex">
                    <x-icons.clock />
                    <span class="ml-1 text-gray-500">15 min read</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </header>

        <div class="px-5 lg:px-0">
          <!-- Post Content -->
          <!-- Uses the official Tailwind CSS Typography plugin -->
          <div
            class="prose mx-auto sm:prose-lg first-letter:text-4xl first-letter:font-bold first-letter:tracking-[.15em] prose-a:transition prose-a:duration-300 prose-a:ease-in-out hover:prose-a:text-red-700 dark:text-red-300 prose-img:rounded-xl"
          >
            <p>
            Key Components of E-Commerce:
Types of E-Commerce:

B2C (Business to Consumer): Businesses sell directly to consumers (e.g., Amazon, Flipkart).
B2B (Business to Business): Businesses sell to other businesses (e.g., Alibaba).
C2C (Consumer to Consumer): Consumers sell to other consumers (e.g., eBay, OLX).
C2B (Consumer to Business): Individuals sell products or services to businesses (e.g., freelance platforms).
            </p>
            <h2>An awesome heading</h2>
            <p>
            Payment Methods:

Online transactions typically involve various payment methods such as credit/debit cards, digital wallets (e.g., PayPal, Google Pay), and cash on delivery.
            </p>
            <p>
            E-commerce continues to evolve, driven by technological advancements and changing consumer behaviors. It offers businesses unprecedented opportunities to expand their reach and streamline operations while providing consumers with convenient shopping experiences.
            </p>
            <figure>
              <img src="images\explore.jpeg" />
              <figcaption>
              Security Concerns:

Protecting customer data and transactions is critical. E-commerce businesses must implement robust cybersecurity measures and comply with regulations like GDPR.
              </figcaption>
            </figure>
            <p>
            The low barrier to entry means high competition. Businesses need to differentiate themselves through branding, quality, and customer service.
            </p>
            <ul>
              
            </ul>
            <p>
            AR technology allows customers to visualize products in their environment before purchasing, improving confidence and reducing return rates.

            </p>
            <p>
            Consumers are increasingly valuing sustainability, prompting businesses to adopt eco-friendly practices in sourcing, packaging, and shipping.
            </p>
            <h2>Another awesome heading</h2>
            <h3>A Stacked heading</h3>
            <p>
            Personalized email campaigns help in nurturing leads and retaining existing customers. Promotions, newsletters, and product recommendations can effectively increase engagement.
            </p>
            <blockquote>
              <p>
                Lorem ipsum dolor sit pretium nullam diam facilisi. Lacus volutpat
                malesuada fusce quis est integer euismod cras est suspendisse
                facilisi morbi.
              </p>
            </blockquote>
            <p>
              Lorem ipsum dolor sit amet quis at praesent erat. Egestas justo ut
              tempus elementum aenean luctus <a href="#">an awesome link</a> fusce
              curabitur at malesuada.
            </p>
            <p>
            Marketing Strategies
            To thrive in the competitive e-commerce landscape, businesses must employ effective marketing strategies. Search Engine Optimization (SEO) enhances online visibility, driving organic traffic to websites. Social media marketing leverages platforms like Instagram and Facebook to engage consumers directly, while email marketing nurtures customer relationships through personalized communication. Influencer marketing has also become a powerful tool, enabling brands to reach niche audiences through authentic endorsements.
            </p>
            
            <ol>
              <li>Lorem ipsum dolor sit amet volutpat bibendum iaculis.</li>
              <li>
                Tortor porttitor elit nibh laoreet consectetur sodales imperdiet
                congue duis blandit tempor phasellus.
              </li>
              <li>
                Enim porta tincidunt non do gravida habitasse hendrerit convallis.
              </li>
            </ol>
            <p>
            Trends and Challenges
E-commerce is continually evolving, influenced by emerging trends such as mobile commerce and augmented reality (AR) technology, which enhances the shopping experience. Subscription services are gaining traction, providing consumers with curated products regularly. However, the sector also faces challenges, including security concerns related to customer data protection and the intense competition among businesses. Additionally, cart abandonment remains a significant issue, necessitating effective strategies to encourage completed transactions.
            </p>
            <p>
              Est mattis enim eleifend donec erat eget tristique. Dictum habitasse
              duis elementum feugiat elit pretium nisl curabitur lacus risus.
              Condimentum vivamus hac vestibulum mauris aliquet massa ultrices
              molestie. Tempor ut blandit fermentum id nisi facilisi turpis non.
              Eleifend duis aliqua eu dapibus lacus consequat quam pulvinar et
              aliqua luctus fames feugiat.
            </p>
          </div>

          <!-- Post Footer -->
          <footer
            class="divide-y-gray-300/70 mx-auto mt-12 max-w-prose divide-y text-lg sm:mt-14"
          >
            <!-- Tags -->
            <ul class="-m-1 flex flex-wrap justify-start pb-8 sm:pb-10">
              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Trends
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Tips
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Lists
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Lessons
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Learnings
                  </span>
                </a>
              </li>
            </ul>

            <!-- Social Share Buttons -->
            <div class="py-8 sm:py-10">
              <div class="flex items-center justify-between">
                <span class="text-lg font-medium text-gray-900"> Share </span>

                <!-- Social Links -->
                <ul class="flex items-center space-x-3">
                    @foreach (config('info.sociallinks') as $link)
                    <li>
                        <a
                            href="{{ url($link['url'])}}" target="_blank"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
                        >
                            <x-dynamic-component :component="$link['name']" />
                        </a>
                    </li>
                    @endforeach
                </ul>
              </div>
            </div>

            <!-- Author Details -->
            <div class="py-8 sm:py-10">
              <div class="flex w-full items-center justify-between">
                <div class="flex flex-col sm:flex-row">
                  <!-- Image -->
                  <div class="flex-shrink-0">
                    <div class="relative w-fit">
                      <img
                        class="h-20 w-20 rounded-2xl object-cover object-center sm:h-24 sm:w-24"
                        src="images/author3.jpeg"
                        alt=""
                      />
                      <span
                        class="absolute inset-0 rounded-2xl shadow-inner"
                        aria-hidden="true"
                      ></span>
                    </div>
                  </div>

                  <!-- Content -->
                  <div class="mt-5 text-left sm:ml-6 sm:mt-0">
                    <div class="flex items-center justify-between">
                      <div class="'flex flex-col">
                        <p class="text-xs uppercase tracking-widest text-red-600">
                            {{ __('About Author') }}
                        </p>
                        <h1
                          class="mt-1 text-xl font-medium tracking-normal text-gray-900 md:tracking-tight lg:leading-tight"
                        >
                          {{ __(config('info.sitename'))}}
                        </h1>
                      </div>
                    </div>

                    <p class="mt-2.5 text-base leading-loose text-gray-500">
                    Piyush Chhagani is a passionate writer and tech enthusiast dedicated to sharing insights on technology, innovation, and personal growth. With a background in computer science and years of experience in the industry, Piyush combines technical knowledge with a flair for storytelling to engage readers. When not writing, you can find him exploring new technologies, reading, or enjoying the outdoors. His mission is to inspire others to embrace curiosity and pursue their passions, one article at a time.
                    </p>

                    <!-- Author Social Links -->
                    <ul class="mt-3.5 flex items-center space-x-3">
                        @foreach (config('info.sociallinks') as $link)
                        <li>
                            <a href="{{ url($link['url'])}}" @if (!($loop->last)) class="group" @endif>
                            <x-dynamic-component :component="$link['name']" />
                            </a>
                        </li>
                    @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </article>
</x-layout>
