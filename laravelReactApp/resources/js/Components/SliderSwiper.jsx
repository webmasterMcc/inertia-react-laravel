import React from 'react';
import { Swiper, SwiperSlide } from 'swiper/react';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';

// Don't forget to import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export default function SlideSwiper() {

      
  return (
    <Swiper
    modules={[Autoplay, Navigation, Pagination]}
    spaceBetween={30}
    slidesPerView={4}
    navigation
    pagination={{ clickable: true }}
    autoplay={{
      delay: 3000,
      disableOnInteraction: false,
    }}
    onSwiper={(swiper) => console.log(swiper)}
    onSlideChange={() => console.log('slide change')}
    >
      <SwiperSlide>    
        <img 
          src="https://luxmarble.com.au/luxmarble7/9029-home_default/taj-mahal-honed-quartzite-slab-bl-203152.jpg" 
          alt="Taj Mahal Honed Quartzite Slab"
          style={{ width: '100%', height: 'auto' }}
        />
        </SwiperSlide>
      <SwiperSlide>
      <img 
          src="https://luxmarble.com.au/luxmarble7/8933-home_default/calacatta-grigio-honed-marble-slab-bl61722.jpg" 
          alt="Taj Mahal Honed Quartzite Slab"
          style={{ width: '100%', height: 'auto' }}
        />
      </SwiperSlide>
      <SwiperSlide>
      <img 
          src="https://luxmarble.com.au/luxmarble7/8814-home_default/avocatus-honed-quartzite-slab-bl10288.jpg" 
          alt="Taj Mahal Honed Quartzite Slab"
          style={{ width: '100%', height: 'auto' }}
        />
      </SwiperSlide>
      <SwiperSlide>
      <img 
          src="https://luxmarble.com.au/luxmarble7/8824-home_default/cristallo-rosa-polished-quartzite-slab-bl11494.jpg" 
          alt="Cristallo Rosa Polished..."
          style={{ width: '100%', height: 'auto' }}
        />
      </SwiperSlide>
      <SwiperSlide>    
        <img 
          src="https://luxmarble.com.au/luxmarble7/9029-home_default/taj-mahal-honed-quartzite-slab-bl-203152.jpg" 
          alt="Taj Mahal Honed Quartzite Slab"
          style={{ width: '100%', height: 'auto' }}
        />
        </SwiperSlide>
      <SwiperSlide>
      <img 
          src="https://luxmarble.com.au/luxmarble7/8933-home_default/calacatta-grigio-honed-marble-slab-bl61722.jpg" 
          alt="Taj Mahal Honed Quartzite Slab"
          style={{ width: '100%', height: 'auto' }}
        />
      </SwiperSlide>
      <SwiperSlide>
      <img 
          src="https://luxmarble.com.au/luxmarble7/8814-home_default/avocatus-honed-quartzite-slab-bl10288.jpg" 
          alt="Taj Mahal Honed Quartzite Slab"
          style={{ width: '100%', height: 'auto' }}
        />
      </SwiperSlide>
      <SwiperSlide>
      <img 
          src="https://luxmarble.com.au/luxmarble7/8824-home_default/cristallo-rosa-polished-quartzite-slab-bl11494.jpg" 
          alt="Cristallo Rosa Polished..."
          style={{ width: '100%', height: 'auto' }}
        />
      </SwiperSlide>

    </Swiper>
  );
}